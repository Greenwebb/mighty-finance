<?php

namespace App\Http\Livewire\Dashboard\Loans;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Maatwebsite\Excel\Facades\Excel;
use App\Classes\Exports\LoanExport;
use App\Models\Application;
use App\Models\User;
use App\Traits\EmailTrait;
use App\Traits\WalletTrait;
use App\Traits\LoanTrait;
use App\Traits\SettingTrait;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class LoanRequestView extends Component
{
    use EmailTrait, WalletTrait, LoanTrait, SettingTrait;
    public $loan_requests, $loan_request, $new_loan_user, $user_basic_pay, $user_net_pay;
    public $type = [];
    public $status = [];
    public $view = 'list';
    public $users, $due_date;
    public $assignModal = false;
    public function render()
    {
        try {
            // Retrieve users with the 'user' role, excluding their applications
            $this->users = User::role('user')->without('applications')->get();
    
            // Create a query builder for loan requests
            $loan_requests = Application::query();

            if (auth()->user()->hasRole('user')) {
                // Retrieve loan requests for the authenticated user and paginate the results (5 items per page)
                $this->loan_requests = Application::with('loan')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
                $requests = Application::with('loan')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->paginate(5);
                return view('livewire.dashboard.loans.loan-request-view',[
                    'requests'=>$requests
                ])->layout('layouts.dashboard');
            }else{
                if ($this->type) {
                    $loan_requests->whereIn('type', $this->type)->orderBy('id', 'desc');
                }
    
                if ($this->status) {
                    $loan_requests->whereIn('status', $this->status)->orderBy('id', 'desc');
                }

                
                if($this->current_configs('loan-approval')->value == 'auto'){
                    // get loan only if first review as approved
                    $this->loan_requests = $loan_requests->where('complete', 1)->get();
                    $requests = $loan_requests->where('complete', 1)->paginate(5);

                }elseif($this->current_configs('loan-approval')->value == 'manual'){
                    $this->loan_requests = $loan_requests->where('complete', 1)->get();
                    $requests = $loan_requests->where('complete', 1)->paginate(5);

                }else{
                    $this->loan_requests = $loan_requests->where('complete', 1)->get();
                    $requests = $loan_requests->where('complete', 1)->paginate(5);
                }

                return view('livewire.dashboard.loans.loan-request-view',[
                    'requests'=>$requests
                ])->layout('layouts.admin');
            }
        } catch (\Throwable $th) {
            // If an exception occurs, set $loan_requests to an empty array
            $this->loan_requests = [];
                  
            if (auth()->user()->hasRole('user')) {
                return view('livewire.dashboard.loans.loan-request-view',[
                    'requests'=>$requests
                ])->layout('layouts.dashboard');
            }else{
                dd('here');
                return view('livewire.dashboard.loans.loan-request-view',[
                    'requests'=>$requests
                ])->layout('layouts.admin');
            }
        }
    }
    

    public function exportLoans(){
        switch ($this->status) {
            case 0:
                $name = 'Pending';
                break;
            case 1:
                $name = 'Approved';
                break;
            case 2:
                $name = 'Paused';
                break;
            case 3:
                $name = 'Rejected';
                break;
            
            default:
                $name = 'All';
                break;
        }
        return Excel::download(new LoanExport($this->status, $this->type), $name.' Loans.xlsx');
    }

    public function changeView($view){
        $this->view = $view;
    }

    // public function openAcceptModal($id){
    //     $this->loan_request = Application::find($id);
    //     $this->render();
    // }
    public function accept($id){
        
        DB::beginTransaction();
        try {
            $x = Application::find($id);
            $this->make_loan($x, $this->due_date);
            if($this->isCompanyEnough($x->amount)){
                $x->status = 1;
                $x->save();
                if($x->email != null){
                    $mail = [
                        'user_id' => '',
                        'application_id' => $x->id,
                        'name' => $x->fname.' '.$x->lname,
                        'loan_type' => $x->type,
                        'phone' => $x->phone,
                        'email' => $x->email,
                        'duration' => $x->repayment_plan,
                        'amount' => $x->amount,
                        'payback' => Application::payback($x->amount, $x->repayment_plan),
                        'type' => 'loan-application',
                        'msg' => 'Your '.$x->type.' loan application request has been successfully accepted'
                    ];
                    $this->send_loan_feedback_email($mail);
                }
                $this->deposit($x->amount, $x);
                DB::commit();
                session()->flash('success', 'Successfully transfered '.$x->amount.' to '.$x->fname.' '.$x->lname);
            }else{
                session()->flash('warning', 'Insuficient funds in the company account, please update funds.');
            }
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'Oops something failed here, please contact the Administrator.'.$th);
        }
    }


    public function acceptOnly($id){
        try {
            $x = Application::find($id);
            if($this->isCompanyEnough($x->amount)){
                $x->status = 1;
                $x->save();
                $mail = [
                    'user_id' => '',
                    'application_id' => $x->id,
                    'name' => $x->fname.' '.$x->lname,
                    'loan_type' => $x->type,
                    'phone' => $x->phone,
                    'email' => $x->email,
                    'duration' => $x->repayment_plan,
                    'amount' => $x->amount,
                    'payback' => Application::payback($x->amount, $x->repayment_plan),
                    'type' => 'loan-application',
                    'msg' => 'Your '.$x->type.' loan application request has been successfully accepted'
                ];
                $this->send_loan_feedback_email($mail);
                session()->flash('success', 'Successfully approved');
            }else{
                session()->flash('warning', 'Insuficient funds in the company account, please update funds.');
            }
        } catch (\Throwable $th) {
            session()->flash('error', 'Oops something failed here, please contact the Administrator.');
        }
    }


    public function stall($id){
        try {
            $x = Application::find($id);
            $x->status = 2;
            $x->save();
            
            $mail = [
                'user_id' => '',
                'application_id' => $x->id,
                'name' => $x->fname.' '.$x->lname,
                'loan_type' => $x->type,
                'phone' => $x->phone,
                'email' => $x->email,
                'duration' => $x->repayment_plan,
                'amount' => $x->amount,
                'payback' => Application::payback($x->amount, $x->repayment_plan),
                'type' => 'loan-application',
                'msg' => 'Your '.$x->type.' loan application is under review'
            ];
            $this->send_loan_feedback_email($mail);
            $this->render();
            session()->flash('info', 'Application is under review.');
        } catch (\Throwable $th) {
            session()->flash('error', 'Oops something failed here, please contact the Administrator.');
        }
    }


    public function reverse($id){
        try {
            $x = Application::find($id);
            $x->status = 3;
            $x->save();
            
            $mail = [
                'user_id' => '',
                'application_id' => $x->id,
                'name' => $x->fname.' '.$x->lname,
                'loan_type' => $x->type,
                'phone' => $x->phone,
                'email' => $x->email,
                'duration' => $x->repayment_plan,
                'amount' => $x->amount,
                'payback' => Application::payback($x->amount, $x->repayment_plan),
                'type' => 'loan-application',
                'msg' => 'Your '.$x->type.' loan application request has been rejected'
            ];
            $this->withdraw($x->amount, $x);
            $this->send_loan_feedback_email($mail);
            session()->flash('success', 'Loan has been rejected');
        } catch (\Throwable $th) {
            session()->flash('error', 'Oops something failed here, please contact the Administrator.');
        }
    }

    public function rejectOnly($id){
        try {
            $x = Application::find($id);
            $x->status = 3;
            $x->save();
            
            $mail = [
                'user_id' => '',
                'application_id' => $x->id,
                'name' => $x->fname.' '.$x->lname,
                'loan_type' => $x->type,
                'phone' => $x->phone,
                'email' => $x->email,
                'duration' => $x->repayment_plan,
                'amount' => $x->amount,
                'payback' => Application::payback($x->amount, $x->repayment_plan),
                'type' => 'loan-application',
                'msg' => 'Your '.$x->type.' loan application request has been rejected'
            ];
            $this->send_loan_feedback_email($mail);
            session()->flash('success', 'Loan has been rejected');
        } catch (\Throwable $th) {
            session()->flash('error', 'Oops something failed here, please contact the Administrator.');
        }
    }

    public function clear(){
        $this->due_date = '';
    }

    public function destroy($id){
        Application::where('id', $id)->first()->delete();
        session()->flash('success', 'Deleted permanently');
    }
}

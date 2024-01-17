<?php

namespace App\Http\Livewire\Dashboard\SiteSettings;

use App\Models\LoanAccountPayment;
use App\Models\LoanServiceCharge;
use App\Traits\LoanTrait;
use Livewire\Component;
use App\Models\AccountPayment;
use App\Models\DisbursedBy;
use App\Models\InterestMethod;
use App\Models\InterestType;
use App\Models\LoanDecimalPlace;
use App\Models\LoanDisbursedBy;
use App\Models\LoanInterestMethod;
use App\Models\LoanInterestType;
use App\Models\LoanProduct;
use App\Models\LoanRepaymentCycle;
use App\Models\RepaymentCycle;
use App\Models\RepaymentOrder;
use App\Models\ServiceCharge;
use Illuminate\Support\Facades\Session;

class UpdateSetting extends Component
{
    use LoanTrait;
    public $page, $loan_product;
    
    // Preset Data
    public $interest_methods, $interest_types, $disbursements, $repayment_cycles;
    public $repayment_orders, $decimal_places, $company_accounts, $service_charges;

    // Loan Product
    public $new_loan_name, $loan_release_date, $minimum_loan_principal_amount, $loan_interest_type;
    public $default_loan_principal_amount, $maximum_principal_amount, $loan_interest_method;
    public $loan_interest_period, $minimum_loan_interest, $default_loan_interest;
    public $maximum_loan_interest, $loan_duration_period, $minimum_loan_duration;
    public $loan_decimal_place, $add_automatic_payments; 

    public $default_loan_duration, $maximum_loan_duration, $default_num_of_repayments; 
    public $maximum_num_of_repayments, $minimum_num_of_repayments; 
    public $auto_payment_sources = [];
    public $loan_disbursed_by = []; 
    public $loan_repayment_cycle = [];
    public $extra_fees = [];
    public function render()
    {
        $this->page = $_GET['page'];
        $this->id = $_GET['item_id'];

        switch ($_GET['page']) {
            case 'loan-product':
                $this->get_data();
                $this->loan_product = $this->get_loan_product($_GET['item_id']);
                $this->set_loan_product_values();
            break;

            // case:'':
            // break;
            
            default:
            break;
        }

        return view('livewire.dashboard.site-settings.update-setting')
        ->layout('layouts.admin');
    }
    

    public function get_data(){
        $this->interest_methods =  InterestMethod::get();
        $this->interest_types = InterestType::get();
        $this->disbursements =  DisbursedBy::get();
        $this->repayment_cycles = RepaymentCycle::get();
        $this->repayment_orders = RepaymentOrder::get();
        $this->company_accounts = AccountPayment::get();
        $this->service_charges = ServiceCharge::get();
    }


    
    public function update_loan_product(){
        try {
            LoanProduct::where('id', 1)->update([
                'name' => $this->new_loan_name,
                'release_date' => $this->loan_release_date,
                'auto_payment' => $this->add_automatic_payments,
                'loan_duration_period' => $this->loan_duration_period,
                'loan_interest_period' => $this->loan_interest_period,
                'min_principal_amount' => $this->minimum_loan_principal_amount,
                'def_principal_amount' => $this->default_loan_principal_amount,
                'max_principal_amount' => $this->maximum_principal_amount,
                'min_loan_duration' => $this->minimum_loan_duration,
                'def_loan_duration' => $this->default_loan_duration,
                'max_loan_duration' => $this->maximum_loan_duration,
                'min_loan_interest' => $this->minimum_loan_interest,
                'def_loan_interest' => $this->default_loan_interest,
                'max_loan_interest' => $this->maximum_loan_interest,
                'min_num_of_repayments' => $this->minimum_num_of_repayments,
                'def_num_of_repayments' => $this->default_num_of_repayments,
                'max_num_of_repayments' => $this->maximum_num_of_repayments,
            ]);
    
            // Replace rand() with respective Parent table Primary key IDs
            // Disbursed Bys ****Loop
            foreach ($this->loan_disbursed_by as $value) {
                LoanDisbursedBy::where('loan_product_id', $this->loan_product->id)
                    ->update([             
                        'disbursed_by_id' => $value,
                        'loan_product_id' => $this->loan_product->id,
                    ]);
            }
    
            // Interest Methods
            LoanInterestMethod::where('loan_product_id', $this->loan_product->id)
            ->update([             
                'interest_method_id' => $this->loan_interest_method,
                'loan_product_id' => $this->loan_product->id
            ]);
            
            // Interest Types
            LoanInterestType::where('loan_product_id', $this->loan_product->id)
            ->update([
                'interest_type_id' => $this->loan_interest_type,
                'loan_product_id' => $this->loan_product->id
            ]);
    
            // Repayment Cycles ****Loop
            foreach ($this->loan_repayment_cycle as $key => $value) {
                LoanRepaymentCycle::where('loan_product_id', $this->loan_product->id)
                    ->update([             
                        'repay_cycle_id' => $value,
                        'loan_product_id' => $this->loan_product->id
                    ]);
            }
    
            // Loan Decimal Places
            LoanDecimalPlace::where('loan_product_id', $this->loan_product->id)
            ->update([
                'value' => $this->loan_decimal_place,
                'loan_product_id' => $this->loan_product->id
            ]);
    
            // Loan Repayment Orders ****Loop
            // LoanRepaymentOrder::Create([
            //     'repayment_order_id' => rand(1, 12),
            //     'loan_product_id' => $loan_product->id
            // ]);
    
            // Loan Service Charges ****Loop
            foreach ($this->extra_fees as $key => $value) {
                LoanServiceCharge::where('loan_product_id', $this->loan_product->id)
                ->update([
                    'service_charge_id' => $value,
                    'loan_product_id' => $this->loan_product->id
                ]);
            }
    
            // Loan Automated Payments ****Loop
            foreach ($this->auto_payment_sources as $key => $value) {
                LoanAccountPayment::where('loan_product_id', $this->loan_product->id)
                ->update([
                    'account_payment_id' => $value,
                    'loan_product_id' => $this->loan_product->id
                ]);
            }
            
            Session::flash('success', "Loan product updated successfully.");
            return redirect()->route('item-settings', ['confg' => 'loan','settings' => 'loan-types']);
            
        } catch (\Throwable $th) {
            Session::flash('error', "Failed. ". $th->getMessage());
            return redirect()->route('item-settings', ['confg' => 'loan','settings' => 'loan-types']);
        
        }
    }



    // ---- Setters
    public function set_loan_product_values(){
        $this->new_loan_name = $this->loan_product->name; 
        $this->loan_release_date = $this->loan_product->release_date; 
        //Dropdowns 
        $this->loan_interest_method = $this->loan_product->interest_methods->first()->id;
        $this->loan_interest_type = $this->loan_product->interest_types->first()->id;

        // Checkboxes
        $this->loan_disbursed_by = $this->loan_product->disbursed_by->pluck('id')->all();
        $this->loan_repayment_cycle = $this->loan_product->repayment_cycle->pluck('id')->all();
        $this->auto_payment_sources = $this->loan_product->loan_accounts->pluck('id')->all();



        $this->loan_duration_period = $this->loan_product->loan_duration_period; 
        $this->loan_interest_period = $this->loan_product->loan_interest_period;

        // Principal
        $this->minimum_loan_principal_amount = $this->loan_product->min_principal_amount; 
        $this->default_loan_principal_amount = $this->loan_product->def_principal_amount; 
        $this->maximum_principal_amount = $this->loan_product->max_principal_amount; 

        // Interest
        $this->minimum_loan_interest = $this->loan_product->min_loan_interest; 
        $this->default_loan_interest = $this->loan_product->def_loan_interest;
        $this->maximum_loan_interest = $this->loan_product->max_loan_interest;
        
        // Duration
        $this->minimum_loan_duration = $this->loan_product->min_loan_duration;
        $this->default_loan_duration = $this->loan_product->def_loan_duration; 
        $this->maximum_loan_duration = $this->loan_product->max_loan_duration; 

        // Repayments
        $this->default_num_of_repayments = $this->loan_product->min_num_of_repayments; 
        $this->maximum_num_of_repayments = $this->loan_product->def_num_of_repayments; 
        $this->minimum_num_of_repayments = $this->loan_product->max_num_of_repayments; 
    }
}
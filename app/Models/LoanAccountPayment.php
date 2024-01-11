<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanAccountPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'account_payment_id',
        'loan_product_id',
        'status'
    ];

    public function account_payments(){
        return $this->belongsTo(AccountPayment::class);
    }

    public function loan_products(){
        return $this->belongsTo(LoanProduct::class);
    }
}

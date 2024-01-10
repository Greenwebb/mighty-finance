<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('release_date')->nullable();
            $table->string('min_principal_amount')->nullable();
            $table->string('def_principal_amount')->nullable();
            $table->string('max_principal_amount')->nullable();
    
            $table->string('min_loan_interest')->nullable();
            $table->string('def_loan_interest')->nullable();
            $table->string('max_loan_interest')->nullable();
    
            $table->string('min_num_of_repayments')->nullable();
            $table->string('def_num_of_repayments')->nullable();
            $table->string('max_num_of_repayments')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_products');
    }
};

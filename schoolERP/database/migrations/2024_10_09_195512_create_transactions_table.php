<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->string('phone');
        $table->string('account_number');
        $table->decimal('amount', 10, 2);
        $table->string('merchant_request_id')->nullable();  // This column
        $table->string('checkout_request_id')->nullable();
        $table->string('mpesa_receipt_number')->nullable();
        $table->string('status')->default('Pending');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

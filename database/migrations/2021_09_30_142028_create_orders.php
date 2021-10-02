<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->float('amount', 6,2);
            $table->string('customer_name');
            $table->string('customer_surname');
            $table->string('customer_address');
            $table->string('customer_email');
            $table->string('phone_number',20);
            $table->string('transaction_id');
            $table->string('transaction_status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

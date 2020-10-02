<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->timestamp('date_time_ordered',0);
            $table->boolean('status')->default(false);
            $table->string('label');
            $table->timestamp('confirmed_delivery_date',0)->default(now());
            $table->time('confirmed_delivery_time',0);
            $table->timestamp('choosen_delivery_date',0)->default(now());
            $table->timestamp('choosen_delivery_time',0)->default(now());
            $table->double('payment',8,2);
            $table->boolean('active_contact')->default(false);
            $table->string('reciever_name');
            $table->string('delivery_address');
            $table->string('customer_message');
            $table->string('admin_remarks');
            $table->double('total_amount');
            $table->double('delivery_fee');
            $table->double('overall_payment');
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
        Schema::dropIfExists('orders');
    }
}

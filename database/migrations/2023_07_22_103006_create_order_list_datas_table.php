<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderListDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_list_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id')->nullable();
            $table->string('order_place_by')->nullable();
            $table->string('state')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('drop_off_date')->nullable();
            $table->string('drop_off_time')->nullable();
            $table->string('calculaion_days')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('discount_amount')->nullable();
            $table->string('addon_charges')->nullable();
            $table->text('addon_details')->nullable();
            $table->string('minimum_advanced_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('bank_transfer_id')->nullable();
            $table->text('bank_slip_url')->nullable();
            $table->text('payment_note')->nullable();
            $table->string('return_state')->nullable();
            $table->text('return_note')->nullable();
            $table->string('cancel_state')->nullable();
            $table->text('cancel_note')->nullable();
            $table->text('log')->nullable();
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
        Schema::dropIfExists('order_list_data');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Foreign Key To Connect To Users Table
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            // Foreign Key To Connect To User_addresses Table
            $table->foreignId('address_id');
            $table->foreign('address_id')->references('id')->on('user_addresses')->onDelete('cascade')->onUpdate('cascade');

            // Foreign Key To Connect To Coupons Table
            $table->foreignId('coupon_id')->nullable();
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade')->onUpdate('cascade');

            $table->tinyInteger('status')->default(0);
            $table->unsignedInteger('total_amount'); // Total Amount Before Discount
            $table->unsignedInteger('delivery_amount')->default(0); // Shiping Cost
            $table->unsignedInteger('coupon_amount')->default(0);  //  Discount Amount
            $table->unsignedInteger('paying_amount')->default(0); //   Total Amount After Discount
            $table->enum('payment_type' , ['online' , 'pos' , 'shabaNumber' , 'cartTocart' , 'cash']);
            $table->tinyInteger('payment_status')->default(0);
            $table->text('description')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

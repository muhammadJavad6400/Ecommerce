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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

             // Foreign Key To Connect To Users Table
             $table->foreignId('user_id');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

              // Foreign Key To Connect To Orders Table
            $table->foreignId('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('amount'); // Transaction Amount
            $table->string('ref_id')->nullable();
            $table->string('token')->nullable();
            $table->text('description')->nullable();
            $table->enum('getway_name' , ['zarinpal' , 'pay']);
            $table->tinyInteger('status')->default(0); // Transaction failed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

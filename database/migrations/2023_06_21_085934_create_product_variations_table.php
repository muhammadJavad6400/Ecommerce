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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();


            // Foreign Key To Connect To Categories Table
            $table->foreignId('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade')->onUpdate('cascade');

            // Foreign Key To Connect To Products Table
            $table->foreignId('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->string('value');
            $table->unsignedBigInteger('price')->default(0); // Price Before Discount
            $table->unsignedInteger('quantity')->default(0);
            $table->string('sku')->nullable();

            $table->unsignedBigInteger('sale_price')->nullable(); // Price After Discount
            $table->timestamp('date_on_sale_from')->nullable();  //  Discount Start Date
            $table->timestamp('date_on_sale_to')->nullable();   //   End of Discount Date
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};

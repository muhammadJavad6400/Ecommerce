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
        Schema::create('attribute_category', function (Blueprint $table) {
            // This Is a Pivot Table Between Table Attributes and Categories

            // Foreign Key To Connect To Categories Table
            $table->foreignId('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade')->onUpdate('cascade');

            // Foreign Key To Connect To Categories Table
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');


            $table->boolean('is_filter')->default(0); // This Attribute Is not a Filter By Default For This Category
            $table->boolean('is_variation')->default(0); // This Attribute Is not a Variation By Default For This Category

            $table->primary(['attribute_id' , 'category_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_category');
    }
};

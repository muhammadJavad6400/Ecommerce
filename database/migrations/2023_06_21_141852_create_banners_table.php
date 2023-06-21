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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            $table->string('images');
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->integer('priority')->nullable();  // الویت بندی
            $table->boolean('is_active')->default(1); // Show Banner
            $table->string('type');
            $table->string('butten_text')->nullable();
            $table->string('butten_link')->nullable();
            $table->string('butten_icon')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};

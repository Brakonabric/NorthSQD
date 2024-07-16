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
        Schema::create('item_images', function (Blueprint $table) {
            $table->longText('image1');
            $table->longText('image2');
            $table->longText('image3');
            $table->longText('image4');
            $table->longText('image5');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('item_colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_images');
    }
};

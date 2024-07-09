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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->char('name',length: 50);
            $table->char('description',length: 50);
            $table->double('price');
            $table->unsignedBigInteger('cart_id');
            $table->char('category',length: 50);
            //$table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->boolean('in_stock');
            $table->string('imageUrl', length:50);
            $table->char('size', length:50);
            $table->double('weight');
            $table->double('discount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
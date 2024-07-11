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
            $table->longText('description');
            $table->double('price');
            $table->char('category',length: 50);
            $table->boolean('in_stock');
            $table->longText('imageUrl');
            $table->char('size', length:50);
            $table->double('weight');
            $table->double('discount')->nullable();
            $table->double('color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

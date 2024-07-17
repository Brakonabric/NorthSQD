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
            $table->char('delivery',length: 50);
            $table->char('terminal',length: 50);
            $table->char('name',length: 50);
            $table->char('surname',length: 50);
            $table->char('email',length: 50)->nullable();
            $table->char('phone',length: 50);
            $table->char('payment',length: 50);
            $table->double('cost');
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

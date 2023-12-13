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
        Schema::create('cart_hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_hotel_id');
            $table->integer('hotel_id');
            $table->float('price');
            $table->timestamps();
            $table->foreign('customer_hotel_id')
            ->references('id')
            ->on('customer_hotels')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_hotels');
    }
};

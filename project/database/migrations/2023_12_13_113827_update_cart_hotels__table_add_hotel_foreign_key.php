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
        Schema::table('cart_hotels', function (Blueprint $table) {
                    $table->unsignedBigInteger('hotel_id')->after('customer_hotel_id');
                    // Thêm khóa ngoại cho cột place_id
                    $table->foreign('hotel_id')
                        ->references('id')
                        ->on('hotels')
                        ->onDelete('cascade');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart_hotels', function (Blueprint $table) {
                    $table->dropForeign(['hotel_id']);
                    $table->dropColumn('hotel_id');
                });
    }
};

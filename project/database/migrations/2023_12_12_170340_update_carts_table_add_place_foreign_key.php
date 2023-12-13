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
        Schema::table('carts', function (Blueprint $table) {
            // Thêm cột place_id
            $table->unsignedBigInteger('place_id')->after('customer_id');
            // Thêm khóa ngoại cho cột place_id
            $table->foreign('place_id')
                ->references('id')
                ->on('places')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            // Xóa khóa ngoại và cột place_id
            $table->dropForeign(['place_id']);
            $table->dropColumn('place_id');
        });
    }
};

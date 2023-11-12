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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('place_id');
            $table->text('descriptions');
            $table->string('phone');
            $table->float('price');
            $table->float('price_sale')->nullable();
            $table->string('thumb');
            $table->integer('active');
            $table->timestamps();
        });

        // Thêm khóa ngoại
        Schema::table('hotels', function(Blueprint $table) {
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
        Schema::dropIfExists('hotels');
    }
};

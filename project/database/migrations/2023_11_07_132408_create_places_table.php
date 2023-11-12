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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descriptions');
            $table->longText('content');
            $table->unsignedBigInteger('destination_id'); // Ni la khoa ngoai
            $table->integer('price');
            $table->integer('price_sale')->nullable();
            $table->integer('active');
            $table->string('thumb');
            $table->timestamps();
        });

        // Them khoa ngoai 
        Schema::table('places', function(Blueprint $table) {
            $table->foreign('destination_id')
            ->references('id')
            ->on('destinations')
            ->onDelete('cascade'); // Xoa cac dong lien quan khi ban ghi bi xoa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};

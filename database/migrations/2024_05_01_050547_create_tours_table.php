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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name'); //nama tour
            $table->string('tour_type'); //private atau lainnya
            $table->foreignId('destination_id')->constrained('destinations')->cascadeOnDelete();
            $table->string('tour_price'); //harga tour
            $table->string('tour_duration',); //durasi tour
            // $table->string('tour_description'); //deskripsi tour
            $table->text('tour_description'); //deskripsi tour
            $table->string('tour_itinerary'); //itinerary tour
            $table->string('tour_image'); //image for tour
            $table->boolean('status'); //publish or draft
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};

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
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->string('visa_name',50); //nama visa
            $table->string('visa_type',50); //type visa multiple or not
            $table->string('visa_expiry_date',50); //masa berlaku visa
            $table->string('visa_price',50); //harga per orang
            $table->text('visa_description'); //deskripsi visa
            $table->boolean('publish_status'); //publish or draft
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visas');
    }
};

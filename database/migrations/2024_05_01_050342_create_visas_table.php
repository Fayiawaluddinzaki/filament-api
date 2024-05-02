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
            $table->string('visa_name'); //nama visa
            $table->string('visa_type'); //type visa multiple or not
            $table->string('visa_expiry_date'); //masa berlaku visa
            $table->string('visa_price'); //harga per orang
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

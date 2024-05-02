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
        Schema::create('sosmeds', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //name of social media
            $table->string('url')->nullable(); //url of social media
            $table->string('icon'); //icon for social media
            $table->boolean('status_published')->default(false); //publish or not
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosmeds');
    }
};

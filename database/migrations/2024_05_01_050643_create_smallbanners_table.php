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
        Schema::create('smallbanners', function (Blueprint $table) {
            $table->id();
            $table->string('small_banners_image'); //image banner
            $table->string('small_banners_url')->nullable(); //url banner
            $table->integer('small_banners_sequence'); //urutan banner
            // $table->string('provider_type');
            $table->boolean('small_banners_status'); //publish or not
            // $table->date('created_at');
            // $table->date('updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smallbanners');
    }
};

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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_type')->nullable(); // contact_type can be email whatsapp and many more
            $table->string('display_name')->nullable(); // display_name is the name of the person who is contacting us
            $table->string('contact_number')->nullable(); // contact_number is the number of the person who is contacting us
            $table->string('çontact_url'); // add url redirect to whatsapp
            // $table->string('çontact_url')->require();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

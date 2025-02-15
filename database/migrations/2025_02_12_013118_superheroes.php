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
        Schema::create('universe', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('real_name'); 
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('universe_id')->constrained('universes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

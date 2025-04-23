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
        Schema::create('show_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('point');
            $table->string('description_1');
            $table->string('description_2');
            $table->string('description_3');
            $table->string('description_4');
            $table->string('logo_image');
            $table->string('profile_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_abouts');
    }
};

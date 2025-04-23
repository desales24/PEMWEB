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
        Schema::create('show_home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image');
            $table->string('logo_image');
            $table->string('title');
            $table->string('tulisan_1');
            $table->string('tulisan_2');
            $table->string('button');
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_home_pages');
    }
};

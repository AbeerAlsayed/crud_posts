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
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->string('picture')->unique()->nullable();
            $table->string('phone')->unique();
            $table->string('cv')->unique()->nullable();
            $table->string('address');
            $table->string('job');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

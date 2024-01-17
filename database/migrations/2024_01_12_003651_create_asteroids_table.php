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
        Schema::create('asteroids', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('asteroid_type_id')->constrained('asteroid_types');
            $table->text('description');
            $table->string('diameter');
            $table->string('mass');
            $table->text('webp');
            $table->text('png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asteroids');
    }
};

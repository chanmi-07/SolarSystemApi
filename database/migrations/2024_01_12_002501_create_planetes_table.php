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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('planet_type_id')->constrained('planet_types');
            $table->text('description');
            $table->string('orbital_distance');
            $table->string('orbital_period');
            $table->string('radius');
            $table->string('volume');
            $table->string('diameter');
            $table->string('mass');
            $table->string('density');
            $table->string('gravity');
            $table->string('temperature');
            $table->string('atmosphere');
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
        Schema::dropIfExists('planets');
    }
};

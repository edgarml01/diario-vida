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
        Schema::create('exercises', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->text('name');
            $table->integer('calories_burned_per_hour');
            $table->boolean('low_intensity')->nullable();
            $table->boolean('medium_intensity')->nullable();
            $table->boolean('high_intensity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};

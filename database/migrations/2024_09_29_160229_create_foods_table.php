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
        Schema::create('foods', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->text('name');
            $table->integer('calories');
            $table->decimal('proteins', 5)->nullable();
            $table->decimal('carbohydrates', 5)->nullable();
            $table->decimal('fats', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};

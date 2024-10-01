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
        Schema::create('meal_details', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('meal_id')->nullable();
            $table->bigInteger('food_id')->nullable();
            $table->decimal('quantity', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_details');
    }
};

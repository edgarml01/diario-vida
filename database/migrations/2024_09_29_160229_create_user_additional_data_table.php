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
        Schema::create('user_additional_data', function (Blueprint $table) {
            $table->date('date')->nullable();
            $table->bigInteger('id')->primary();
            $table->integer('age')->nullable();
            $table->decimal('height')->nullable();
            $table->decimal('weight')->nullable();
            $table->integer('avg_exercise_times_per_week')->nullable();
            $table->decimal('avg_sleep_hours_per_day')->nullable();
            $table->integer('avg_meals_per_day')->nullable();
            $table->text('special_health_conditions')->nullable();
            $table->text('types_of_drugs_used')->nullable();
            $table->bigInteger('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_additional_data');
    }
};

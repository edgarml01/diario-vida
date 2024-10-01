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
        Schema::table('meal_details', function (Blueprint $table) {
            $table->foreign(['food_id'], 'meal_details_food_id_fkey')->references(['id'])->on('foods')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['meal_id'], 'meal_details_meal_id_fkey')->references(['id'])->on('meals')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('meal_details', function (Blueprint $table) {
            $table->dropForeign('meal_details_food_id_fkey');
            $table->dropForeign('meal_details_meal_id_fkey');
        });
    }
};

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
        Schema::table('workouts', function (Blueprint $table) {
            $table->foreign(['exercise_id'], 'workouts_exercise_id_fkey')->references(['id'])->on('exercises')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'workouts_user_id_fkey')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workouts', function (Blueprint $table) {
            $table->dropForeign('workouts_exercise_id_fkey');
            $table->dropForeign('workouts_user_id_fkey');
        });
    }
};

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
        Schema::table('user_additional_data', function (Blueprint $table) {
            $table->foreign(['user_id'], 'user_additional_data_user_id_fkey')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_additional_data', function (Blueprint $table) {
            $table->dropForeign('user_additional_data_user_id_fkey');
        });
    }
};

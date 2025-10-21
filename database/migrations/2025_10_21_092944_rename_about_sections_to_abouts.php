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
        // The abouts table already exists, just add missing columns
        if (!Schema::hasColumn('abouts', 'image')) {
            Schema::table('abouts', function (Blueprint $table) {
                $table->string('image')->nullable();
                $table->json('technologies')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn(['image', 'technologies']);
        });
    }
};

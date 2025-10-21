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
        Schema::table('services', function (Blueprint $table) {
            // Add technologies field as requested in requirements
            $table->json('technologies')->nullable()->after('full_description');

            // Rename full_description to description to match requirements
            $table->renameColumn('full_description', 'description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('technologies');
            $table->renameColumn('description', 'full_description');
        });
    }
};

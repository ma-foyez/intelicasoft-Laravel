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
        Schema::table('settings', function (Blueprint $table) {
            // Rename columns to match requirements
            $table->renameColumn('option_name', 'key');
            $table->renameColumn('option_value', 'value');
            $table->dropColumn('autoload');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->renameColumn('key', 'option_name');
            $table->renameColumn('value', 'option_value');
            $table->boolean('autoload')->default(false);
        });
    }
};

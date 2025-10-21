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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('achievement_type'); // award, certification, milestone, recognition
            $table->string('issued_by')->nullable();
            $table->date('date_achieved');
            $table->string('certificate_image')->nullable();
            $table->string('certificate_url')->nullable();
            $table->string('badge_icon')->nullable();
            $table->string('badge_color')->default('#3B82F6');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index(['is_active', 'is_featured', 'order']);
            $table->index('achievement_type');
            $table->index('date_achieved');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};

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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('category', ['Web', 'Admin', 'Android', 'iOS'])->default('Web');
            $table->text('description');
            $table->json('technologies')->nullable();
            $table->string('client')->nullable();
            $table->date('completion_date')->nullable();
            $table->string('web_url')->nullable();
            $table->string('admin_url')->nullable();
            $table->string('android_url')->nullable();
            $table->string('ios_url')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index(['category', 'is_active']);
            $table->index(['is_featured', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

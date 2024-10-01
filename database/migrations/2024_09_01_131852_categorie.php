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
        Schema::create('categories', callback: function (Blueprint $table) {
            $table->id();
            $table->string(column: 'nom')->nullable();
            $table->string(column: 'titre')->nullable();
            $table->string(column: 'image')->nullable();
            $table->longText(column: 'resume')->nullable();
            $table->longText(column: 'description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'categories');
    }
};

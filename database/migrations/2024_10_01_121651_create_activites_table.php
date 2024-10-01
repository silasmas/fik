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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'titre')->nullable();
            $table->string(column: 'sujet')->nullable();
            $table->string(column: 'cover')->nullable();
            $table->string(column: 'participant')->nullable();
            $table->dateTime(column: 'date')->nullable();
            $table->json(column: 'images')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', ['en attente', 'en cours', 'passer'])->default(value: 'en attente');
            $table->boolean('is_active')->default(true);
            $table->foreignId('categorie_id')->constrained('categories')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activites');
    }
};

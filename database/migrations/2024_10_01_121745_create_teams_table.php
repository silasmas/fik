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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'nom');
            $table->string(column: 'postnom');
            $table->string('prenom');
            $table->string(column: 'tache');
            $table->string(column: 'profil');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->boolean('is_active')->default(true);
            $table->string('role')->default('admin');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

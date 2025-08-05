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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom du club
            $table->string('logo_path')->nullable(); // Chemin vers le logo
            $table->text('description')->nullable(); // Description du club
            $table->string('contact_person')->nullable(); // Nom de la personne de contact
            $table->string('contact_email')->nullable(); // Email de contact
            $table->string('contact_phone')->nullable(); // Téléphone de contact
            $table->boolean('is_active')->default(true); // Pour désactiver un club sans le supprimer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};

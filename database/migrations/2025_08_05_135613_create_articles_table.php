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
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Crée une colonne 'id' auto-incrémentée (clé primaire)
            
            $table->string('title'); // Le titre de l'article (ex: "Championnat National 2024")
            $table->string('slug')->unique(); // L'URL de l'article (ex: "championnat-national-2024")
            $table->text('content'); // Le contenu complet de l'article
            $table->string('image_path')->nullable(); // Le chemin vers l'image de l'article (nullable = optionnel)
            $table->boolean('is_published')->default(false); // Statut de publication (brouillon ou publié)
            $table->timestamp('published_at')->nullable(); // Date à laquelle l'article est publié (optionnel)
            
            $table->timestamps(); // Crée les colonnes 'created_at' et 'updated_at' automatiquement
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

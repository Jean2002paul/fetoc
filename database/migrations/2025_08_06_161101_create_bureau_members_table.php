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
        Schema::create('bureau_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position'); // Ex: "Président", "Secrétaire Général"
            $table->string('photo_path')->nullable();
            $table->integer('order')->default(0); // Pour pouvoir ordonner les membres manuellement
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureau_members');
    }
};

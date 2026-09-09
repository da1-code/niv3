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
        Schema::create('fichiers_cours', function (Blueprint $table) {

            $table->id();

            // Cours auquel appartient le fichier
            $table->foreignId('cours_id')
                  ->constrained('cours')
                  ->onDelete('cascade');

            $table->string('nom_fichier');

            $table->string('chemin');

            $table->enum('type', [
                'pdf',
                'video',
                'image',
                'document'
            ])->default('pdf');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichiers_cours');
    }
};
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
        Schema::create('ajoutcours', function (Blueprint $table) {

            $table->id();
            
            // prof+
            $table->foreignId('idprof')->constrained('users')->onDelete('cascade');
             $table->foreignId('idclasse')->constrained('classes')->onDelete('cascade');


            // Titre du cours
            $table->string('titre');

            // Description du cours
            $table->text('description');

            // Classe : 6ème, 5ème, 4ème, 3ème,
            // Seconde, Première, Terminale
            $table->string('classe');

            // Série : Scientifique ou Littéraire
            $table->string('serie');

            // Nom / chemin du fichier du cours
            $table->string('document');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajoutcours');
    }
};
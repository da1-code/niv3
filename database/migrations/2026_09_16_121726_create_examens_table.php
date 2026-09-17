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
        Schema::create('examens', function (Blueprint $table) {

            $table->id();

            // Professeur qui a créé l'examen
            $table->foreignId('idprof')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Classe concernée
            $table->foreignId('idclasse')
                  ->constrained('classes')
                  ->onDelete('cascade');

            // Informations de l'examen
            $table->string('titre');
            $table->text('description')->nullable();

            // Matière / cours
            $table->string('cours');

            // Série
            $table->enum('serie', ['scientifique', 'litteraire']);

            // Niveau / classe
            $table->string('niveau');

            // Date et heure de l'examen
            $table->date('date_examen')->nullable();
            $table->time('heure_examen')->nullable();

            // Durée en minutes
            $table->integer('duree')->nullable();

            // Nombre de questions
            $table->integer('questions')->nullable();

            // État de l'examen
            $table->enum('statut', ['brouillon', 'publie'])
                  ->default('brouillon');

            // Permet de désactiver un examen
            $table->boolean('actif')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
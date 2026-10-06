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
        Schema::create('profil_apprentissages', function (Blueprint $table) {
           
            $table->id();

            // Utilisateur
            $table->unsignedBigInteger('iduser');

            // Classe de l'étudiant
            $table->unsignedBigInteger('idclasse');

            // Profil d'apprentissage
            $table->string('type_apprentissage')->nullable();
            $table->string('moment_etude')->nullable();
            $table->string('duree_etude')->nullable();

            // Préférences de l'IA
            $table->json('preferences')->nullable();

            $table->timestamps();


            // Relation avec users
            $table->foreign('iduser')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');


            // Relation avec classes
            $table->foreign('idclasse')
                  ->references('id')
                  ->on('classes')
                  ->onDelete('cascade');


            // Un utilisateur possède un seul profil
            $table->unique('iduser');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_apprentissages');
    }
};

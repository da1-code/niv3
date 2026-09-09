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
        Schema::create('progressions', function (Blueprint $table) {

            $table->id();

            // Étudiant concerné
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Cours suivi
            $table->foreignId('cours_id')
                  ->constrained('cours')
                  ->onDelete('cascade');

            // Niveau d'avancement du cours
            $table->integer('pourcentage')
                  ->default(0);

            $table->enum('statut', [
                'non_commence',
                'en_cours',
                'termine'
            ])->default('non_commence');

            $table->timestamp('derniere_consultation')
                  ->nullable();

            $table->timestamps();

            // Un étudiant a une seule progression par cours
            $table->unique([
                'user_id',
                'cours_id'
            ]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progressions');
    }
};
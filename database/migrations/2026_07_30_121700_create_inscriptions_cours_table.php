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
        Schema::create('inscriptions_cours', function (Blueprint $table) {

            $table->id();

            // Étudiant inscrit
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Cours suivi
            $table->foreignId('cours_id')
                  ->constrained('cours')
                  ->onDelete('cascade');

            $table->date('date_inscription');

            $table->timestamps();

            // Empêche un étudiant de s'inscrire deux fois au même cours
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
        Schema::dropIfExists('inscriptions_cours');
    }
};
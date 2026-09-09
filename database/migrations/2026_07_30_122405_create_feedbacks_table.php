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
        Schema::create('feedbacks', function (Blueprint $table) {

            $table->id();

            // Étudiant qui donne l'avis
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Cours concerné
            $table->foreignId('cours_id')
                  ->constrained('cours')
                  ->onDelete('cascade');

            // Note donnée au cours (1 à 5)
            $table->integer('note')
                  ->default(5);

            // Commentaire de l'étudiant
            $table->text('commentaire')
                  ->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
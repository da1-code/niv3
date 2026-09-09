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
        Schema::create('conversations_ia', function (Blueprint $table) {

            $table->id();

            // Étudiant qui discute avec l'IA
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->text('question');

            $table->text('reponse');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations_ia');
    }
};
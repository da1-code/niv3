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
        Schema::create('cours', function (Blueprint $table) {

            $table->id();

            // Le professeur qui a créé le cours
            $table->foreignId('professeur_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            $table->string('titre');

            $table->text('description')
                  ->nullable();

            $table->string('fichier')
                  ->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
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
        Schema::create('classe_etudiants', function (Blueprint $table) {
           $table->id();

            $table->unsignedBigInteger('idclasse');

            $table->unsignedBigInteger('iduser');


            // Relation avec classes
            $table->foreign('idclasse')
                  ->references('id')
                  ->on('classes')
                  ->onDelete('cascade');


            // Relation avec users
            $table->foreign('iduser')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');


            // Un étudiant ne peut avoir qu'une seule association
            $table->unique('iduser');
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe_etudiants');
    }
};

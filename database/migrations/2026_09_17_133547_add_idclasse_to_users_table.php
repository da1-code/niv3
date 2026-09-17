<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ajouter la relation entre users et classes
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->foreign('idclasse')
                ->references('id')
                ->on('classes')
                ->nullOnDelete();
        });
    }

    /**
     * Supprimer la relation
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign(['idclasse']);
        });
    }
};
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
        Schema::create('niveaus', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('systeme');
            $table->string('annee');
            $table->string('serie');
            $table->bigInteger('id_dossier');
            $table->timestamps();
            $table->foreign('id_dossier')->references('id')->on('dossiers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveaus');
    }
};

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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('moyenne_bac');
            $table->string('moyenne_concours');
            $table->string('serie');
            $table->date('date_soumission');
            $table->string('etat');
            $table->date('date_entretien');
            $table->boolean('estValide');
            $table->string('appreciation');
            $table->bigInteger('id_candidat');
            $table->bigInteger('id_session_concours');
            $table->bigInteger('id_admis');
            $table->timestamps();
            $table->foreign('id_candidat')->references('id')->on('candidats');
            $table->foreign('id_session_concours')->references('id')->on('session_concours');
            $table->foreign('id_admis')->references('id')->on('admis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};

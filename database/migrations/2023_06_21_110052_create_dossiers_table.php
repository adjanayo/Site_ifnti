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
            $table->float('moyenne_bac');
            $table->float('moyenne_concours')->nullable();
            $table->string('serie');
            $table->date('date_soumission');
            $table->string('etat');
            $table->date('date_entretien')->nullable();
            $table->boolean('estValide');
            $table->string('appreciation');
            $table->bigInteger('candidat_id');
            $table->bigInteger('sessionconcour_id');
            //$table->bigInteger('id_admis');
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
            $table->foreign('sessionconcour_id')->references('id')->on('sessionconcours')->onDelete('cascade');
            //$table->foreign('id_admis')->references('id')->on('admis');
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

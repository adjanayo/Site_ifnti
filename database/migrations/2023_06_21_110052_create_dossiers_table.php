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
            $table->string('moyenne_bac')->nullable();
            $table->float('moyenne_concours')->nullable();
            $table->date('date_soumission')->nullable();
            $table->string('etat')-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>nullable();
            $table->date('date_entretien')->nullable();
            $table->boolean('estValide')->nullable();
            $table->string('appreciation')->nullable();
            $table->bigInteger('candidat_id');
            $table->bigInteger('sessionconcour_id');
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
            $table->foreign('sessionconcour_id')->references('id')->on('sessionconcours')->onDelete('cascade');
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

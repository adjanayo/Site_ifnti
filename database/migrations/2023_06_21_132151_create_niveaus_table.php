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
<<<<<<< HEAD
            $table->string('serie');
            $table->bigInteger('id_dossier');
=======
            $table->bigInteger('dossier_id');
>>>>>>> 91dc2e9eb31c6f16c080ecf8e56c6ff02ed0fa79
            $table->timestamps();
            $table->foreign('dossier_id')->references('id')->on('dossiers')->onDelete('cascade');
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

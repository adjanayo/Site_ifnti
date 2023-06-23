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
        Schema::create('decoupages', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->bigInteger('id_niveau');
            $table->bigInteger('id_bulletin');
            $table->timestamps();
            $table->foreign('id_niveau')->references('id')->on('niveaus')->onDelete('cascade');
            $table->foreign('id_bulletin')->references('id')->on('bulletins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decoupages');
    }
};

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
        Schema::create('detail_sorties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sortie_id')->constrained('sorties')->onDelete('cascade');
            $table->foreignId('matiere_id')->constrained('matieres')->onDelete('cascade');
            $table->integer('quantite');
            $table->text('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sorties');
    }
};

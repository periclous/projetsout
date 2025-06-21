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
        Schema::create('reformes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mouvement_id')->constrained('mouvements')->onDelete('cascade');
            $table->foreignId('immobilisation_id')->constrained('immobilisations')->onDelete('cascade');
            $table->text('motif');
            $table->string('etat_final');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reformes');
    }
};

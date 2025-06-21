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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('code')->unique();
            $table->foreignId('type_matiere_id')->constrained('types_matieres')->onDelete('cascade');
            $table->string('unite');
            $table->decimal('valeur_unitaire', 10, 2);
            $table->integer('duree_vie')->nullable();
            $table->string('localisation')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};

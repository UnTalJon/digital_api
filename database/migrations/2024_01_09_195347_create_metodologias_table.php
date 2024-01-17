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
        Schema::create('metodologias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('busqueda_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('contenido');
            $table->timestamps();
        });

        Schema::create('bitacora_metodologia', function (Blueprint $table) {
            $table->foreignId('bitacora_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('metodologia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['bitacora_id', 'metodologia_id']);

        });

        Schema::create('imagen_metodologia', function (Blueprint $table) {
            $table->foreignId('imagen_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('metodologia_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['imagen_id', 'metodologia_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metodologias');
        Schema::dropIfExists('bitacora_metodologia');
        Schema::dropIfExists('imagen_metodologia');
    }
};

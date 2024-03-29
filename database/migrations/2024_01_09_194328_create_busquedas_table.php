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
        Schema::create('busquedas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('fase_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('fecha_creacion')->default(now());
            $table->foreignId('lugar_creacion')->constrained(
                table: 'municipios'
            )->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('fecha_inicial')->nullable();
            $table->date('fecha_final')->nullable();
            $table->point('coordenadas')->nullable();
            $table->string('localidad');
            $table->foreignId('lugar_comision')->constrained(
                table: 'municipios'
            )->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('extension_comision')->nullable();
            $table->text('consideraciones_finales')->nullable();
            $table->timestamps();
        });

        Schema::create('busqueda_persona', function (Blueprint $table) {
            $table->foreignId('busqueda_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('persona_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['busqueda_id', 'persona_id']);
        });

        Schema::create('busqueda_grupo', function (Blueprint $table) {
            $table->foreignId('busqueda_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('grupo_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['busqueda_id', 'grupo_id']);

        });

        Schema::create('busqueda_imagen', function (Blueprint $table) {
            $table->foreignId('busqueda_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('imagen_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['busqueda_id', 'imagen_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busquedas');
        Schema::dropIfExists('busqueda_persona');
        Schema::dropIfExists('busqueda_grupo');
        Schema::dropIfExists('busqueda_imagen');
    }
};

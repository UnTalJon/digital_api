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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->timestamps();
        });

        Schema::create('bitacora_imagen', function (Blueprint $table) {
            $table->foreignId('bitacora_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('imagen_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
        Schema::dropIfExists('bitacora_imagen');
    }
};

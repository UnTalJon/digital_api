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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('busqueda_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('contenido');
            $table->timestamps();
        });

        Schema::create('bitacora_plan', function (Blueprint $table) {
            $table->foreignId('bitacora_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('plan_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });

        Schema::create('imagen_plan', function (Blueprint $table) {
            $table->foreignId('imagen_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('plan_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
        Schema::dropIfExists('bitacora_plan');
        Schema::dropIfExists('imagen_plan');
    }
};

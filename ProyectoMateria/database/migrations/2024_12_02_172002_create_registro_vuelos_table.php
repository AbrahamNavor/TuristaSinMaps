<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registro_vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('origen', 255);
            $table->string('destino', 255);
            $table->date('fecha_salida');
            $table->date('fecha_regreso');
            $table->integer('asientos');
            $table->string('clase');
            $table->string('aerolinea', 255);
            $table->string('vuelo', 50);
            $table->time('horario_salida');
            $table->time('horario_llegada');
            $table->decimal('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_vuelos');
    }
};

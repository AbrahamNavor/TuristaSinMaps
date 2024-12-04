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
        Schema::create('registro_hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('direccion', 255);
            $table->string('telefono', 15);
            $table->integer('habitaciones');
            $table->string('categoria', 255);
            $table->string('servicios', 255);
            $table->decimal('precio', 8, 2); // Hasta 999,999.99
            $table->string('descripcion', 255);
            $table->string('politicas', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_hoteles');
    }
};

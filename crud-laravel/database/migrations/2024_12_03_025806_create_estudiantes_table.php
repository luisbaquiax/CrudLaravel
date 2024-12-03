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
        //código estudiante, nombre, apellido, dirección, correo, teléfono, estado)
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};

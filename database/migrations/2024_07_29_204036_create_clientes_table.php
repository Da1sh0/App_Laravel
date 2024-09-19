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
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('primer_apellido', 100);
            $table->string('ciudad', 100);
            $table->string('direccion', 100);
            $table->string('correo', 100);
            $table->string('contraseña', 255);
            $table->boolean('activo');
            $table->decimal('saldo_inicial', 20,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

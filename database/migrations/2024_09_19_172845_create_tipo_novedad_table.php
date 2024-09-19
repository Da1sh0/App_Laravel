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
        Schema::create('tipo_novedad', function (Blueprint $table) {
            $table->string('id_tipo_novedad', 10)->primary();
            $table->string('nombre_tipo_novedad', 50)->nullable();
            $table->string('Descripcion_tipo', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_novedad');
    }
};

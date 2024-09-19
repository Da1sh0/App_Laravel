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
        Schema::create('pago_devengado', function (Blueprint $table) {
            $table->string('id_pago_devengado', 10)->primary();
            $table->string('nro_documento_empleado', 10)->nullable();
            $table->string('tipo_pago', 50)->nullable();
            $table->decimal('monto', 10, 2)->nullable();
            $table->date('fecha_pago')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_devengado');
    }
};

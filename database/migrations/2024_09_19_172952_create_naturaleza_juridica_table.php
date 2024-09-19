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
        Schema::create('naturaleza_juridica', function (Blueprint $table) {
            $table->string('id_naturaleza_juridica', 10)->primary();
            $table->string('nombre_naturaleza_juridica', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naturaleza_juridica');
    }
};

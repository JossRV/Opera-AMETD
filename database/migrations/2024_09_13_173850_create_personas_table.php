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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->bigInteger('telefono')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->smallInteger('afiliado')->nullable();
            $table->smallInteger('estatus')->default(1);
            $table->unsignedBigInteger('cat_prefijo_id')->nullable();
            $table->unsignedBigInteger('cat_genero_id')->nullable();
            $table->unsignedBigInteger('cat_pais_id');
            $table->unsignedBigInteger('cat_especialidad_id');
            $table->unsignedBigInteger('cat_estados_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

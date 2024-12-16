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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->float('monto');
            $table->string('referencia');
            $table->date('fecha_pago');
            $table->unsignedBigInteger('cat_metodo_pago_id');
            $table->unsignedBigInteger('cat_forma_pago_id');
            $table->unsignedBigInteger('persona_id');
            $table->smallInteger('factura');
            $table->smallInteger('estatus_pago');
            $table->string('comprobante');
            $table->string('formato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};

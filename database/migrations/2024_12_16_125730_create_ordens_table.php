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
        Schema::create('cat_ordenes', function (Blueprint $table) {
            $table->id();
            $table->string('orden');
            $table->text('descripcion');
            $table->float('precio_mx');
            $table->float('precio_dl');
            $table->unsignedBigInteger('cat_tipo_orden_id');
            $table->year('anio');
            $table->smallInteger('afiliado')->nullable()->default(0);
            $table->smallInteger('categoria');
            $table->smallInteger('estatus');
            $table->unsignedBigInteger('cat_excibiciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_ordenes');
    }
};

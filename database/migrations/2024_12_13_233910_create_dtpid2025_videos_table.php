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
        Schema::create('dtpid2025_videos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('enlace')->nullable();
            $table->string('miniatura')->nullable();
            $table->string('visualizaciones')->default(0);
            $table->string('likes')->default(0);
            $table->unsignedBigInteger('duracion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtpid2025_videos');
    }
};

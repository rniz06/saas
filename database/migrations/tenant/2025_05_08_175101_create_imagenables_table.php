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
        Schema::create('imagenables', function (Blueprint $table) {
            $table->id('id_imagen');
            $table->string('nombre')->default('imagen.jpg');
            $table->string('ruta')->default('/');
            $table->string('tipo', 50)->nullable();
            $table->string('disco', 30)->nullable();
            $table->integer('tamanho')->nullable();
            $table->uuid('uuid')->unique()->nullable();
            $table->morphs('imagenable');
            $table->foreignId('creado_por')->nullable()->constrained('users', 'id')->restrictOnDelete();
            $table->foreignId('actualizado_por')->nullable()->constrained('users', 'id')->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenables');
    }
};

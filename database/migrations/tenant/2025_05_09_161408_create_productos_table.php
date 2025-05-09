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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre', 100);
            $table->string('descripcion');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->integer('cantidad_minima');
            $table->foreignId('categoria_id')->constrained('producto_categorias', 'idproducto_categoria');
            $table->foreignId('estado_id')->constrained('producto_estados', 'idproducto_estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

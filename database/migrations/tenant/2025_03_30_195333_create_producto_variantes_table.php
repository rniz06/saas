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
        Schema::create('producto_variantes', function (Blueprint $table) {
            $table->id('idproducto_variante');
            $table->foreignId('producto_id')->constrained('productos', 'id_producto')->onDelete('cascade');
            $table->foreignId('atributo_id')->constrained('producto_atributos', 'idproducto_atributo')->onDelete('cascade');
            $table->string('variante');
            $table->integer('precio_adicional')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_variantes');
    }
};

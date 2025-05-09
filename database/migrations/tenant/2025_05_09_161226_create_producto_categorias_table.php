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
        Schema::create('producto_categorias', function (Blueprint $table) {
            $table->id('idproducto_categoria');
            $table->string('categoria', 50)->unique();
            $table->foreignId('categoria_padre')->nullable()->constrained('producto_categorias', 'idproducto_categoria')->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_categorias');
    }
};

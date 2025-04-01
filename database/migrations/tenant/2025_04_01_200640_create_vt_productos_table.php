<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            CREATE VIEW `vt_productos` AS
                SELECT
                    p.id_producto,
                    p.nombre,
                    p.descripcion,
                    p.precio,
                    p.cantidad,
                    p.cantidad_minima,
                    p.categoria_id,
                    pc.categoria,
                    p.estado_id,
                    pe.estado,
                    p.deleted_at
                FROM productos p
            JOIN producto_categorias pc ON (pc.idproducto_categoria = p.categoria_id)
            JOIN producto_estados pe ON (pe.idproducto_estado = p.estado_id)
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `vt_productos`");
    }
};

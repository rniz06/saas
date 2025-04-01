<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Producto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener un ID de categoria y estado existentes
        $categoriaElectronica = DB::table('producto_categorias')->where('categoria', 'Electrónica')->first()->idproducto_categoria;
        $categoriaRopa = DB::table('producto_categorias')->where('categoria', 'Ropa')->first()->idproducto_categoria;

        $estadoNuevo = DB::table('producto_estados')->where('estado', 'Nuevo')->first()->idproducto_estado;
        $estadoUsado = DB::table('producto_estados')->where('estado', 'Usado')->first()->idproducto_estado;

        // Insertar productos
        DB::table('productos')->insert([
            'nombre' => 'Smartphone Samsung Galaxy',
            'descripcion' => 'Un smartphone de última generación con características excepcionales.',
            'precio' => 700,
            'cantidad' => 50,
            'cantidad_minima' => 10,
            'categoria_id' => $categoriaElectronica,
            'estado_id' => $estadoNuevo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Laptop HP Pavilion',
            'descripcion' => 'Laptop con procesador Intel Core i7, 16GB de RAM y 512GB SSD.',
            'precio' => 900,
            'cantidad' => 30,
            'cantidad_minima' => 5,
            'categoria_id' => $categoriaElectronica,
            'estado_id' => $estadoNuevo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta Adidas',
            'descripcion' => 'Camiseta de fútbol de la marca Adidas, talla M.',
            'precio' => 25,
            'cantidad' => 100,
            'cantidad_minima' => 20,
            'categoria_id' => $categoriaRopa,
            'estado_id' => $estadoNuevo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Zapatos Nike Air Max',
            'descripcion' => 'Zapatos deportivos de la marca Nike, ideales para correr.',
            'precio' => 120,
            'cantidad' => 40,
            'cantidad_minima' => 10,
            'categoria_id' => $categoriaRopa,
            'estado_id' => $estadoUsado,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

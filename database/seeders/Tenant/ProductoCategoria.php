<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoCategoria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar categorías principales
        $categoria1 = DB::table('producto_categorias')->insertGetId([
            'categoria' => 'Electrónica',
            'categoria_padre' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $categoria2 = DB::table('producto_categorias')->insertGetId([
            'categoria' => 'Ropa',
            'categoria_padre' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertar subcategorías para Electrónica
        DB::table('producto_categorias')->insert([
            'categoria' => 'Smartphones',
            'categoria_padre' => $categoria1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_categorias')->insert([
            'categoria' => 'Computadoras',
            'categoria_padre' => $categoria1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertar subcategorías para Ropa
        DB::table('producto_categorias')->insert([
            'categoria' => 'Hombres',
            'categoria_padre' => $categoria2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_categorias')->insert([
            'categoria' => 'Mujeres',
            'categoria_padre' => $categoria2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoAtributo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar atributos de productos
        DB::table('producto_atributos')->insert([
            'atributo' => 'Color',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_atributos')->insert([
            'atributo' => 'Tamaño',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_atributos')->insert([
            'atributo' => 'Peso',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_atributos')->insert([
            'atributo' => 'Material',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_atributos')->insert([
            'atributo' => 'Garantía',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

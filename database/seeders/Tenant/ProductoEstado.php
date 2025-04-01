<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoEstado extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar estados de productos
        DB::table('producto_estados')->insert([
            'estado' => 'Nuevo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_estados')->insert([
            'estado' => 'Usado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_estados')->insert([
            'estado' => 'Reacondicionado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_estados')->insert([
            'estado' => 'Daño total',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Database\Seeders\Tenant\ProductoAtributoSeeder;
use Database\Seeders\Tenant\ProductoCategoriaSeeder;
use Database\Seeders\Tenant\ProductoEstadoSeeder;
use Database\Seeders\Tenant\ProductoSeeder;
use Database\Seeders\Tenant\ProductoVarianteSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ProductoCategoriaSeeder::class,
            ProductoEstadoSeeder::class,
            ProductoSeeder::class,
            ProductoAtributoSeeder::class,
            ProductoVarianteSeeder::class
        ]);
    }
}

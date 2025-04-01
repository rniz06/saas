<?php

namespace Database\Seeders;

use Database\Seeders\Tenant\Producto;
use Database\Seeders\Tenant\ProductoAtributo;
use Database\Seeders\Tenant\ProductoCategoria;
use Database\Seeders\Tenant\ProductoEstado;
use Database\Seeders\Tenant\ProductoVariante;
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
            ProductoCategoria::class,
            ProductoEstado::class,
            Producto::class,
            ProductoAtributo::class,
            ProductoVariante::class
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tenant1 = Tenant::create([
            'id' => 'cosmos',
            'nombre_empresa' => 'Cosmos',
            'sitio_web' => 'cosmos.com',
            'razon_social' => 'Cosmos E.A.S',
            'ruc' => '123456789-5',
            'direccion' => 'Constitución y Próceres de Mayo',
            'logo' => 'img/logo-por-defecto.webp'
        ]);
        $tenant1->domains()->create(['domain' => 'cosmos.saas.test']);

        $tenant2 = Tenant::create(['id' => 'bar', 'nombre_empresa' => 'Bar']);
        $tenant2->domains()->create(['domain' => 'bar.saas.test']);

        Tenant::all()->runForEach(function () {
            User::factory()->create();
        });
    }
}

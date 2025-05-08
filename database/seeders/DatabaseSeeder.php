<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory()->create();

        // Crea usuario en la base de datos central
        User::factory()->create([
            'name' => 'Ronald Alexis Niz Nuñez',
            'username' => 'ronald.niz',
            'email' => 'ronald.niz@marka.com.py',
            'email_verified_at' => now(),
            'password' => Hash::make('Rann2006'),
            //'remember_token' => Str::random(10),
        ]);

        // crea un tenant en la base de datos central y
        // adicionalmente un dominio y su propia base de datos
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

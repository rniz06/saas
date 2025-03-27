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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //$tenant1 = Tenant::create(['id' => 'foo']);
        //$tenant1->domains()->create(['domain' => 'foo.saas']);

        //$tenant2 = Tenant::create(['id' => 'bar']);
        //$tenant2->domains()->create(['domain' => 'bar.saas']);

        Tenant::all()->runForEach(function () {
            User::factory()->create();
        });
    }
}

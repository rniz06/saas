<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class, // Inicializar inquilino por dominio completo ej: cosmos.saas.test
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Route::get('/', function () {
    //     //dd(\App\Models\User::all());
    //     //return 'Esta es su aplicación multiinquilino. El ID del inquilino actual es ' . tenant('id');
    // });

    //Rutas del Controlador de Autenticación
    Route::get('/iniciar-session', [AuthController::class, 'index'])->name('login');
    Route::post('/iniciar-session', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/salir', [AuthController::class, 'logout'])->name('auth.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [InicioController::class, 'index'])->name('inicio');
        Route::get('/inicio', function () {
            return redirect()->route('inicio');
        })->name('inicio.redirect');
    });
});

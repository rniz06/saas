<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductoController;
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

    //Rutas del Controlador de Autenticación
    Route::get('/iniciar-session', [AuthController::class, 'index'])->name('login');
    Route::post('/iniciar-session', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/salir', [AuthController::class, 'logout'])->name('auth.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [InicioController::class, 'index'])->name('inicio');
        Route::get('/inicio', function () {
            return redirect()->route('inicio');
        })->name('inicio.redirect');

    /*
    |--------------------------------------------------------------------------
    | Modulo Productos
    |--------------------------------------------------------------------------
    */
        Route::controller(ProductoController::class)->group(function () {
            Route::get('productos', 'index')->name('productos.index');
            Route::get('productos/create', 'create')->name('productos.create');
            Route::post('productos/store', 'store')->name('productos.store');
            Route::get('productos/{producto}', 'show')->name('productos.show');
            Route::get('productos/{producto}/edit', 'edit')->name('productos.edit');
            Route::put('productos/{producto}', 'update')->name('productos.update');
            Route::delete('productos/{producto}', 'destroy')->name('productos.destroy');
        });
    });
});

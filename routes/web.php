<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        

        //Rutas del Controlador de Autenticación
        Route::get('/iniciar-session', [AuthController::class, 'index'])->name('login');
        Route::post('/iniciar-session', [AuthController::class, 'login'])->name('auth.login');
        Route::post('/salir', [AuthController::class, 'logout'])->name('auth.logout');

        Route::middleware('auth')->group(function (){
            Route::get('/', [InicioController::class, 'index'])->name('inicio');
        });
    });
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Retornar la vista de autenticación.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Autenticar al usuario en la aplicación.
     */
    public function login(Request $request)
    {
        //return dd($request);
        $request->validate([
            'usuario' => 'required|string',
            'contrasena' => 'required|string'
        ]);

        $campo = filter_var($request->usuario, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$campo => $request->usuario, 'password' => $request->contrasena])) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['error' => 'Credenciales inválidas']);
        //return dd($request);
    }

    /**
     * Cerrar la sesión del usuario de la aplicación.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

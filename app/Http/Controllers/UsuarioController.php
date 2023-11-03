<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        if (count($request->old()) === 0) {
            $usuario = new User();
            $mensaje="";
        } else {
            $mensaje="Usuario o clave incorrecta, o usuario mal ingresado";
            $usuario = new User($request->old());
        }
        return view('login', ['usuario' => $usuario,'mensaje'=> $mensaje]);
    }
    public function loginPost(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect('/insertar');
        }

        $usuario = new User($request->all());
        $mensaje="Usuario o clave incorrecta";

        return view('login', ['usuario' => $usuario,'mensaje'=> $mensaje]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

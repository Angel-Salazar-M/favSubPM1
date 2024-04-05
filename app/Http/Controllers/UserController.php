<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login (Request $request) {
        $credentials = $request -> validate ([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if (Auth::attempt($credentials)) {
            return redirect('/home');
        }

        return back ()->withErrors(['email' => 'Credenciales incorrectas', 'password' => 'Contraseña incorrecta']);

    }

    public function create (Request $request) {
$datosvalidados=$request->validate([
    'name' => 'required|min:3',
    'email'=> 'required|email|unique:Users',
    'password'=> 'required|string',
    'birthday' => 'required|date',
]);

if (User::create($datosvalidados)) {
    return redirect('/home');
}

return back()->withErrors(['email'=>'error']);
    }
}

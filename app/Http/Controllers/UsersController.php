<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function store(Request $request){
       
        $nuevoUsuario=new users();
        $nuevoUsuario->nombres = $request->nombres;
        $nuevoUsuario->apellidos = $request->apellidos;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->num_doc = $request->num_doc;
        $nuevoUsuario->tipo_doc = $request->num_doc;
        $nuevoUsuario->password = Hash::make($request->password);
        //$nuevoUsuario->rol = $request->rol;

        $nuevoUsuario->save();

        $nuevoUsuario->assignRole($request->rol);

        return redirect()->route("login");

        //echo 'usuario creado con éxito';
        }

        
    public function login(Request $request){
            //dd($request->email);
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
            
        
            $credentials = $request->only('email', 'password');
        
            // Intentar autenticar al usuario
            if (Auth::attempt($credentials)) {
                // Si las credenciales son correctas, redirige al usuario a su área privada
                return redirect()->route('ingreso');
            }
        
            // Si las credenciales son incorrectas, muestra un mensaje de error y redirige de nuevo al formulario de inicio de sesión
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
    public function store(Request $request){
       
        // Crear el usuario
        $usuario = Users::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'num_doc' => $request->tipo_doc,
            'tipo_doc' => $request->num_doc,
            'password' => Hash::make($request->password)
        ]);

        $rol = Role::where('name', $request->rol)->first();
        $usuario->assignRole($rol);

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
    public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route("login");
        }
}

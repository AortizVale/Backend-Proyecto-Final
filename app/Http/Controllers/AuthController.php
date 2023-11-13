<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function homePage()
    {
        return view("paginas.home");
    }

    public function loginPage()
    {
        return view("paginas.login");
    }

    public function registerPage()
    {

        $roles = Role::all();
        return view("paginas.registro", ['roles' => $roles]);
    }
}

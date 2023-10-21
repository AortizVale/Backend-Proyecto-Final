<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function homePage(){
        return view("paginas.home");
    }

    public function loginPage(){
        return view("paginas.login");
    }

    public function registerPage(){
        return view("paginas.registro");
    }
}

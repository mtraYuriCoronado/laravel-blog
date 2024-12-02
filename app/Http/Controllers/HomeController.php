<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodo que llamaremos en la ruta
    public function index(){
        return "Bienvenido a la página de inicio";
    }
}

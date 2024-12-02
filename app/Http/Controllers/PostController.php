<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui se enlistan todos los posts";
    }
    public function create(){
        return "Aqui se mostrará un formulario para crear un nuevo post";
    }    
    public function show($post){
        return "Aqui se muestra el post {$post}";
    }
}

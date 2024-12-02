<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     //return view('welcome');
//     return "Welcome to the homepage";
// });

// Route::get('/posts', function () {
//     //return view('welcome');
//     return "Aqui se enlistan los posts";
// });

// rutas con parámetros
// Route::get('/posts/{post}', function ($post) {
//     //return view('welcome');
//     return "Aqui se muestra el post {$post}";
// });
// Route::get('/posts/{category}/{post}', function ($category, $post) {
//     //return view('welcome');
//     return "Aqui se muestra el post {$post} de la cateogira {$category}";
// });
// Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
//     //return view('welcome');
//     if($category){
//         return "Aqui se muestra el post {$post} de la categoria {$category}";
//     }
//     return "Aqui se muestra el post {$post}";
// });

// Rutas usando controladores
Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
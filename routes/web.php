<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
Route::get('/', HomeController::class)->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

# Ejemplo ELOQUENT
Route::get('prueba', function () {
    // return "Hola desde la ruta de prueba";

    /*
    // Crear un nuevo registro
    # 1. creamos una instancia del modelo
    $post = new Post;

    # 2. le indicamos las propiedades que concidan con los campos de la tabla
    $post->title = 'Titulo de prueba 3';
    $post->content = 'Contenido de prueba 3';
    $post->category = 'Categoria de prueba 3';

    # 3. insertamos los datos en la bd 
    $post->save();

    return $post;
 */

    /*
    // Actualizar un registro
    # 1. Recuperar los registros que coincidan con el id 1
    // $post = Post::find(1);

    # 2. O busca entre los registros los filtrados
    $post = Post::where('title', 'Titulo de prueba 2')
            ->first();

    # 3. Actualiza un campo
    $post->category = 'Desarrollo web';
    $post->save();

    return $post;
    */

    /*
    // Traer mas de un campo
    $post = Post::where('title','>=', '2')
            ->get();

    $post = Post::orderBy('id','desc')
            ->get();   
    */    
    
    /*
    // Eliminar registros
    # 1. Recuperar el registro a eliminar
    $post = Post::find(1);
    $post->delete();
    */
    
    // Casting de campos
    $post = Post::find(1);
    // return $post->published_at->format('d/m/Y');
    dd($post->is_active);

});
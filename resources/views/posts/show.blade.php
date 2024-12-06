<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog en Laravel 11 | Posts</title>
</head>
<body>
    <a href="/posts">Volver a posts</a>
    <h1>Titulo: {{ $post->title }}</h1>
    <p>
        <b>Categoria: </b> {{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="/posts/{{$post->id}}/edit">
        Editar post
    </a>

    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar post">
    </form>
     
</body>
</html>
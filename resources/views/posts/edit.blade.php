<x-app-layout>
    <h1>Editar Post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        {{-- Token para enviar un formulario --}}
        @csrf
        @method('PUT')
        <label for="">Titulo:</label> <input type="text" name="title" value="{{$post->title}}"> <br>
        <label for="">Categoria:</label> <input type="text" name="category" value="{{$post->category}}"> <br>
        <label for="">Contenido:</label> <br> <textarea name="content" id="" cols="30" rows="10">{{$post->content}} </textarea> <br>
        <input type="submit" value="Actualizar post">
    </form>
</x-app-layout>
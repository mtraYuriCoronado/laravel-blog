<x-app-layout>
    <h1>Editar Post</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        {{-- Token para enviar un formulario --}}
        @csrf
        @method('PUT')
        <label for="">Titulo:</label> <input type="text" name="title" value="{{old('title',$post->title)}}"> <br>
        <label for="">Slug:</label> <input type="text" name="slug" value="{{old('slug', $post->slug)}}"> <br>
        <label for="">Categoria:</label> <input type="text" name="category" value="{{old('category', $post->category)}}"> <br>
        <label for="">Contenido:</label> <br> <textarea name="content" id="" cols="30" rows="10">{{old('content',$post->content)}} </textarea> <br>
        <input type="submit" value="Actualizar post">
    </form>
</x-app-layout>
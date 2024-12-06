<x-app-layout>
    <h1>Nuevo Post</h1>
    <form action="/posts" method="POST">
        {{-- Token para enviar un formulario --}}
        @csrf
        <label for="">Titulo:</label> <input type="text" name="title"> <br>
        <label for="">Categoria:</label> <input type="text" name="category"> <br>
        <label for="">Contenido:</label> <br> <textarea name="content" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Crear post">
    </form>
</x-app-layout>
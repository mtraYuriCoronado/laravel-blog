<x-app-layout>
    <h1>Nuevo Post</h1>

    {{-- @if ($errors->any())
        <div>
            <h2>Erorres</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{route('posts.store')}}" method="POST">
        {{-- Token para enviar un formulario --}}
        @csrf
        <label for="">Titulo:</label> <input type="text" name="title" value="{{old('title')}}"> 
        @error('title')
            {{$message}}
        @enderror
        <br>
        <label for="">Slug:</label> <input type="text" name="slug" value="{{old('slug')}}"> <br>
        <label for="">Categoria:</label> <input type="text" name="category" value="{{old('category')}}"> <br>
        <label for="">Contenido:</label> <br> <textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea> <br>
        <input type="submit" value="Crear post">
    </form>
</x-app-layout>
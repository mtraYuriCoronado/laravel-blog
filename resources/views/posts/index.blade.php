<x-app-layout>
    <h1>Aqui se enlistan todos los posts</h1>

    <a href="{{route('posts.create')}}">
        Nuevo post
    </a>

    <ul>
        @foreach ($posts as $post)
            <li>
                {{-- <a href="{{route('posts.show', $post->id)}}"> --}}
                <a href="{{route('posts.show', $post)}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <!-- Enlaces de paginación -->
    {{ $posts->links() }}
</x-app-layout>

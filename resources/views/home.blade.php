<x-app-layout>
    <x-h1 type="info">
        Bienvenido a la página principal  vgh
    </x-h1>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert type="danger" class="mb-4">
            <x-slot name="title">
                ¡Peligro!
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <x-alert type="warning" class="mb-4">
            <x-slot name="title">
                Cuidado!
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <x-alert type="error" class="mb-4">
            <x-slot name="title">
                Cuidado!
            </x-slot>
            Contenido de la alerta
        </x-alert>
        <p>Hola mundo</p>
        <x-boton>Haz clic aquí</x-boton>
        <a href="{{route('posts.index')}}">Vamos a los posts!</a>
    </div>
</x-app-layout>
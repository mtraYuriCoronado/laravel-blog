<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 Ejemplo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1>Bienvenido a la página principal</h1>

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
    </div>

</body>

</html>

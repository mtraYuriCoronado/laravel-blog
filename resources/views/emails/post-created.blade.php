{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post por aprobar</title>
</head>
<body>
    <h1>Post por aprobar</h1>

    <p>Se ha creado un nuevo post que necesita ser aprobado</p>

    <a href="{{route('posts.show', $post)}}">Click aquí para aprobar</a>

</body>
</html> --}}
<x-mail::message>
# Post por aprobar

<p>Se ha creado un nuevo post que necesita ser aprobado</p>

<x-mail::panel>
Por favor de clic en el botón para revisar el post
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)"
    color="error">
Click aquí para aprobar
</x-mail::button>


</x-mail::message>
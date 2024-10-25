<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página principal</h1>

    @foreach($modulos as $modulo)
        <a href="{{ route('inicio.modulo-1') }}">{{ $modulo->categoria }}</a><br>
    @endforeach
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página principal</h1>

    @foreach($temas as $tema)
    <a href="{{ route('inicio.modulo-1.tema-1') }}">{{ $tema->titulo }}</a><br>
    @endforeach
</body>

</html>
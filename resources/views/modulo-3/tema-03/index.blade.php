<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 03</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-primary font-sans text-gray-900">
    @include('components.header')
    <main>
        @include('modulo-1.tema-03.tema')
    </main>

    @vite('resources/js/app.js')
    @vite('resources/js/annyang.js')
    @vite('resources/js/comandos.js')
    @vite('resources/js/comandos-m1.js')
</body>

</html>
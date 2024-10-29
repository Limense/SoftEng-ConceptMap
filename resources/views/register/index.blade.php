<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans text-gray-900">
    @include('components.header')
    <main>
        @include('register.register')
    </main>

    @vite('resources/js/app.js')
    @vite('resources/js/annyang.js')
    @vite('resources/js/comandos.js')
</body>

</html>
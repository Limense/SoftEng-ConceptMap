<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans text-gray-900 bg-primary">
    @include('components.header')
    <main>
        @include('profile.profile')
    </main>

    @vite('resources/js/app.js')
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IA Chatbot</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans text-gray-900 bg-primary">
    @include('components.header')
    <main>
        @include('chatbot.chatbot')
    </main>

    @vite('resources/js/app.js')
    @vite('resources/js/annyang.js')
    @vite('resources/js/comandos.js')
</body>

</html>
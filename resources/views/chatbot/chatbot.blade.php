<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatbot - Ingeniería de Software</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #1a1a1a, #3b0d0d);
            font-family: 'Press Start 2P', cursive;
            color: black;
        }

        .chat-message {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .message-content {
            white-space: pre-line;
        }

        .clear-button {
            background-color: #FF5733;
            color: #fff;
        }

        .clear-button:hover {
            background-color: #C70039;
        }

        .chat-container {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .user-message {
            background-color: #FF5733;
            color: #000;
        }

        .bot-message {
            background-color: #444;
            color: #fff;
        }

        h1, h2, p {
            font-size: 1rem;
        }

        .message-content {
            font-size: 0.9rem;
        }

        #message {
            font-size: 0.9rem;
            resize: none;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto chat-container p-6 bg-gray-900">
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-1/4 bg-gray-800 p-4 border-r border-gray-600">
                    <h2 class="text-lg font-semibold text-gray-100 mb-4">Temas Disponibles</h2>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="hover:bg-gray-600 hover:text-white p-2 rounded cursor-pointer">Metodologías Ágiles</li>
                        <li class="hover:bg-gray-600 hover:text-white p-2 rounded cursor-pointer">Scrum</li>
                        <li class="hover:bg-gray-600 hover:text-white p-2 rounded cursor-pointer">UML</li>
                        <li class="hover:bg-gray-600 hover:text-white p-2 rounded cursor-pointer">Pruebas de Software</li>
                        <li class="hover:bg-gray-600 hover:text-white p-2 rounded cursor-pointer">Patrones de Diseño</li>
                    </ul>
                    <div class="mt-6">
                        <button id="clear-chat" class="clear-button w-full px-4 py-2 rounded transition">
                            Limpiar Chat
                        </button>
                    </div>
                </div>

                <!-- Chat Area -->
                <div class="w-3/4 flex flex-col h-[600px]">
                    <div class="p-4 border-b border-gray-600 bg-gray-900 rounded-t-lg">
                        <h1 class="text-xl font-bold text-white">Chatbot de Ingeniería de Software</h1>
                        <p class="text-sm text-gray-400">Haz preguntas sobre conceptos de ingeniería de software</p>
                    </div>

                    <!-- Messages Container -->
                    <div id="chat-messages" class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-800 rounded-b-lg">
                        <div class="chat-message" id="response">
                            <p class="message-content text-gray-300">¡Bienvenido! Hazme una pregunta.</p>
                        </div>
                    </div>

                    <!-- Input Area -->
                    <div class="p-4 border-t border-gray-600 bg-gray-900">
                        <form id="chat-form" class="flex space-x-2">
                            <textarea 
                                id="message" 
                                class="flex-1 rounded-lg border-2 border-gray-300 p-2 focus:outline-none focus:border-blue-500 transition"
                                placeholder="Escribe tu pregunta aquí..."
                                rows="2"></textarea>
                            <button 
                                type="submit"
                                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                            >
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.sidebar ul li').click(function() {
                const topic = $(this).text();
                $('#message').val(topic).focus();
            });

            $('#chat-form').on('submit', function(e) {
                e.preventDefault();
                const message = $('#message').val();
                if (!message) return;

                appendMessage(message, 'user');
                $('#message').val('').focus();

                $.post('/chatbot', { question: message })
                    .done(function(response) {
                        appendMessage(response.response, 'bot');
                        scrollToBottom();
                    })
                    .fail(function(xhr) {
                        let errorMessage = 'Ha ocurrido un error.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        appendMessage(errorMessage, 'bot');
                    });
            });

            $('#clear-chat').click(function() {
                if (confirm('¿Estás seguro de que quieres limpiar el historial?')) {
                    $('#chat-messages').empty();
                    $('#chat-messages').append(`
                        <div class="chat-message" id="response">
                            <p class="message-content text-gray-300">¡Bienvenido! Hazme una pregunta.</p>
                        </div>
                    `);
                }
            });

            function appendMessage(message, type) {
                const align = type === 'user' ? 'justify-end' : 'justify-start';
                const messageClass = type === 'user' ? 'user-message' : 'bot-message';
                
                const messageHtml = `
                    <div class="chat-message">
                        <div class="flex ${align} mb-2">
                            <div class="${messageClass} rounded-lg py-2 px-4 max-w-md">
                                <p class="message-content">${message.replace(/\n/g, '<br>')}</p>
                            </div>
                        </div>
                    </div>
                `;
                
                $('#chat-messages').append(messageHtml);
                scrollToBottom();
            }

            function scrollToBottom() {
                const chatMessages = document.getElementById('chat-messages');
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            scrollToBottom();
        });
    </script>
    
</body>
@vite('resources/js/annyang.js')
@vite('resources/js/comandos.js')
</html>

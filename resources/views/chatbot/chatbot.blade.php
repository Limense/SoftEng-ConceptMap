<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CDNs necesarios -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>

        /* Importación de la fuente retro Press Start 2P de Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        /* Estilos base del body con fondo y configuración flex */
        body {
            background: url('/images/banner-first.gif') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Press Start 2P', cursive;
            color: black;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        /* Estilo para el título principal con animación de rebote */
        .mario-title {
            font-family: 'Press Start 2P', cursive;
            color: #ffd700;
            text-shadow: 2px 2px #ff0000;
            animation: bounce 0.5s infinite alternate;
            padding: 10px 0;
        }

        /* Definición de la animación de rebote */
        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-5px); }
        }

        /* Hamburguesa se adapte al movil */
        .toggle-sidebar {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 50;
            background-color: #e52521;
            color: white;
            padding: 0.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Estilo para el botón de regresar */
        .navigation-button {
            background-color: #e52521;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-family: 'Press Start 2P', cursive;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }

        .navigation-button:hover {
            background-color: #ff3e3a;
            transform: scale(1.05);
        }

        /* Contenedor principal de la página */
        .page-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        /* Contenedor del chat */
        .chat-container {
            height: 85vh;
            width: 100%;
            max-width: 1400px;
            margin: auto;
            background-color: rgba(30, 30, 30, 0.95);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Animación para los mensajes del chat */
        .chat-message {
            animation: fadeIn 0.5s ease-in;
        }

        /* Definición de la animación de aparición */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Botón de limpiar chat */
        .clear-button {
            background-color: #e52521;
            color: white;
            font-family: 'Press Start 2P', cursive;
            font-size: 12px;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .clear-button:hover {
            background-color: #ff3e3a;
            transform: scale(1.05);
        }

        /* Estilos para los mensajes del usuario y del bot */
        .user-message {
            background-color: #4a90e2;
            color: white;
        }

        .bot-message {
            background-color: #2c3e50;
            color: white;
        }

         /* Área de entrada de texto */
        .input-area {
            background-color: rgba(70, 70, 70, 0.8);
            border-radius: 8px;
        }

        /* Estilos para los items de temas */
        .topic-item {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .topic-item:hover {
            background-color: #e52521;
            border-color: #ffd700;
            transform: scale(1.05);
        }

        /* Media queries para responsividad */
        @media (max-width: 768px) {
            .toggle-sidebar {
                display: block;
            }

            .chat-container {
                height: 90vh;
                margin: 1rem;
            }

            .chat-flex-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100% !important;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease-out;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                z-index: 40;
                background-color: rgba(31, 41, 55, 0.95);
            }

            .sidebar.active {
                max-height: 300px;
                overflow-y: auto;
            }

            .chat-area {
                width: 100% !important;
            }

            .mario-title {
                font-size: 14px;
            }

            .sidebar ul {
                margin-bottom: 1rem;
            }

            .topic-item {
                padding: 0.5rem;
                font-size: 0.875rem;
            }

            .clear-button,
            .navigation-button {
                padding: 8px;
                font-size: 10px;
            }
        }

        @media (max-width: 480px) {
            .page-container {
                padding: 0.5rem;
            }

            .chat-container {
                margin: 0.25rem;
            }

            .input-area form {
                flex-direction: column;
                gap: 8px;
            }

            .input-area button {
                width: 100%;
            }

            .sidebar.active {
                max-height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Botón de toggle para móvil -->
    <button class="toggle-sidebar">
        <i class="fas fa-bars"></i>
    </button>

    <div class="page-container">
        <div class="chat-container">
            <div class="flex h-full chat-flex-container">
                <!-- Sidebar -->
                <div class="w-1/4 bg-gray-800 p-4 border-r border-gray-600 sidebar">
                    <h2 class="mario-title text-lg mb-4">Temas Disponibles</h2>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <!-- Lista de temas -->
                        <li class="topic-item p-2 rounded cursor-pointer">Metodologías Ágiles</li>
                        <li class="topic-item p-2 rounded cursor-pointer">Scrum</li>
                        <li class="topic-item p-2 rounded cursor-pointer">UML</li>
                        <li class="topic-item p-2 rounded cursor-pointer">Pruebas de Software</li>
                        <li class="topic-item p-2 rounded cursor-pointer">Patrones de Diseño</li>
                    </ul>
                    <div class="mt-6">
                        <!-- Botones de acción -->
                        <button id="clear-chat" class="clear-button w-full rounded transition">
                            Limpiar Chat
                        </button>
                        <button class="navigation-button">
                            ← Regresar
                        </button>
                    </div>
                </div>

                <!-- Área de chat -->
                <div class="w-3/4 flex flex-col h-full chat-area">
                    <div class="p-4 border-b border-gray-600 bg-gray-900">
                            <!-- Encabezado del chat -->
                        <h1 class="mario-title">Chatbot de Ingeniería de Software</h1>
                        <p class="text-sm text-gray-400">Haz preguntas sobre conceptos de ingeniería de software</p>
                    </div>
                            <!-- Contenedor de mensajes -->
                    <div id="chat-messages" class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-800">
                        <div class="chat-message" id="response">
                            <p class="message-content text-gray-300">¡Bienvenido! Hazme una pregunta.</p>
                        </div>
                    </div>
                            <!-- Área de entrada de texto -->
                    <div class="input-area p-4 border-t border-gray-600">
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Configuración de CSRF para peticiones AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Manejo del botón de regreso con confirmación
            $('.navigation-button').click(function(e) {
                e.preventDefault();
                if(confirm('¿Estás seguro que deseas salir del chat?')) {
                    window.location.href = '/';
                }
            });

            // Toggle del sidebar en móvil
            $('.toggle-sidebar').click(function(e) {
                e.stopPropagation();
                $('.sidebar').toggleClass('active');
            });

            // Cerrar sidebar al hacer click fuera
            $(document).click(function(event) {
                if (!$(event.target).closest('.sidebar').length && 
                    !$(event.target).closest('.toggle-sidebar').length && 
                    $('.sidebar').hasClass('active')) {
                    $('.sidebar').removeClass('active');
                }
            });

            // Manejo de click en temas del sidebar
            $('.sidebar ul li').click(function() {
                const topic = $(this).text();
                $('#message').val(topic).focus();
                if (window.innerWidth <= 768) {
                    $('.sidebar').removeClass('active');
                }
            });

            // Manejo del envío del formulario
            $('#chat-form').on('submit', function(e) {
                e.preventDefault();
                const message = $('#message').val();
                if (!message) return;

                // Añade el mensaje del usuario a la interfaz
                appendMessage(message, 'user');
                // Se limpia el input y se enfoca
                $('#message').val('').focus();

                // Envío de la pregunta al servidor
                $.post('/chatbot/send', { question: message })
                    .done(function(response) {
                        // Muestra la respuesta del bot
                        appendMessage(response.response, 'bot');
                        scrollToBottom();
                    })
                    .fail(function(xhr) {
                        // Manejos de errores
                        let errorMessage = 'Ha ocurrido un error.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        appendMessage(errorMessage, 'bot');
                    });
            });

            // Manejo del botón limpiar chat
            $('#clear-chat').click(function() {
                if (confirm('¿Estás seguro de que quieres limpiar el historial?')) {
                    $.post('/chatbot/clear')
                        .done(function() {
                            $('#chat-messages').empty();
                            $('#chat-messages').append(`
                                <div class="chat-message" id="response">
                                    <p class="message-content text-gray-300">¡Bienvenido! Hazme una pregunta.</p>
                                </div>
                            `);
                        })
                        .fail(function(xhr) {
                            console.error('Error al limpiar el chat:', xhr);
                        });
                }
            });

            // Función para agregar mensajes al chat
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

            // Función para hacer scroll al último mensaje
            function scrollToBottom() {
                const chatMessages = document.getElementById('chat-messages');
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            // Ajustar sidebar al cambiar el tamaño de la ventana
            $(window).resize(function() {
                if (window.innerWidth > 768) {
                    $('.sidebar').removeClass('active');
                }
            });

            // Scroll inicial
            scrollToBottom();
        });
    </script>
</body>
</html>
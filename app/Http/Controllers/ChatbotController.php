<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Clase para manejar las peticiones HTTP
use GuzzleHttp\Client;  // Cliente HTTP para hacer peticiones a la API

class ChatbotController extends Controller
{
    private $chatHistory = []; // almacenar

    public function index()
    {
        // Pasamos el historial de mensajes a la vista, renderizamos la vista chatbot
        return view('chatbot.chatbot', ['messages' => $this->chatHistory]);
    }

    public function handle(Request $request)
    {
        // Crear una instancia del cliente HTTP
        $client = new Client();
        $response = $client->post('http://localhost:5000/predict', [
            'json' => [
                'question' => $request->input('question')
            ]
        ]);

        // Decofiicar la respuesta JSON recibida del servidor de Flask
        $data = json_decode($response->getBody(), true);
        $answer = $data['answer']; // Extrae la respuesta del modelo

        // Agregamos el mensaje y la respuesta al historial
        $this->chatHistory[] = (object)[
            'message' => $request->input('question'),
            'response' => $answer,
        ];

        return response()->json(['response' => $answer]);
    }

    public function clearHistory()
    {
        // Limpiamos el historial
        $this->chatHistory = [];
        return response()->json(['message' => 'Historial limpio.']);
    }
}

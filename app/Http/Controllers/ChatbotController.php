<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatbotController extends Controller
{
    private $chatHistory = [];

    public function index()
    {
        // Pasamos el historial de mensajes a la vista
        return view('chatbot.chatbot', ['messages' => $this->chatHistory]);
    }

    public function handle(Request $request)
    {
        $client = new Client();
        $response = $client->post('http://localhost:5000/predict', [
            'json' => [
                'question' => $request->input('question')
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        $answer = $data['answer'];

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

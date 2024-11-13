from flask import Flask, request, jsonify
import json
import tensorflow as tf
from tensorflow.keras.models import load_model
import pickle
import random

# Crear una instancia de la aplicación Flask
app = Flask(__name__)

# Cargar el modelo de aprendizaje profundo entrenado previamente
model = load_model('../model/modelo_chatbot.h5')

# Cargar las etiquetas (labels) correspondientes a las predicciones del modelo
with open('../model/labels_chatbot.json', 'r') as f:
    labels = json.load(f)

# procesar las preguntas
with open('../model/tokenizer_chatbot.pickle', 'rb') as f:
    tokenizer = pickle.load(f)
with open('../model/train/intents.json', 'r', encoding='utf-8') as f:
    intents = json.load(f)


# Función para obtener la respuesta adecuada a partir de la etiqueta (tag) predicha
def get_response(tag):
    for intent in intents['intents']:
        # Buscar en el archivo de intenciones la respuesta correspondiente a la etiqueta
        if intent['tag'] == tag:
            # Devolver una respuesta aleatoria de las definidas para esa etiqueta
            return random.choice(intent['responses'])
    # Si no se encuentra una respuesta adecuada, devolver un mensaje predeterminado
    return "Lo siento, no entiendo la pregunta."


# Ruta para recibir solicitudes POST y generar respuestas
@app.route('/predict', methods=['POST'])
def predict():
    # Obtener los datos de la solicitud en formato JSON
    data = request.get_json()

    # Verificar que se haya proporcionado una pregunta
    if not data or 'question' not in data:
        return jsonify({'error': 'Pregunta no proporcionada'}), 400

    # Obtener la pregunta del JSON
    question = data['question']

    # Preprocesar la pregunta: convertir el texto a una secuencia de tokens
    sequences = tokenizer.texts_to_sequences([question])
    padded_sequences = tf.keras.preprocessing.sequence.pad_sequences(sequences, maxlen=100)

    # Utilizar el modelo para predecir la etiqueta (tag) de la pregunta
    prediction = model.predict(padded_sequences)
    label_index = prediction.argmax()

    # Obtener la etiqueta (tag) correspondiente a la predicción
    tag = labels.get(str(label_index), None)

    # Si no se encontró una etiqueta válida, devolver un mensaje de error
    if tag is None:
        return jsonify({'answer': "Lo siento, no entiendo la pregunta."}), 404

    # Obtener la respuesta correspondiente a la etiqueta predicha
    answer = get_response(tag)

    # Devolver la respuesta en formato JSON
    return jsonify({'answer': answer})


# Ejecutar el servidor Flask en el puerto 5000
if __name__ == '__main__':
    app.run(port=5000)

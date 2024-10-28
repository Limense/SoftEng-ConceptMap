from flask import Flask, request, jsonify
import json
import tensorflow as tf
from tensorflow.keras.models import load_model
import pickle
import random

app = Flask(__name__)

# Cargar modelo, etiquetas, tokenizer e intents
model = load_model('modelo_chatbot.h5')

with open('labels_chatbot.json', 'r') as f:
    labels = json.load(f)

with open('tokenizer_chatbot.pickle', 'rb') as f:
    tokenizer = pickle.load(f)

# Cargar intents.json con la codificación adecuada
with open('intents.json', 'r', encoding='utf-8') as f:
    intents = json.load(f)

def get_response(tag):
    for intent in intents['intents']:
        if intent['tag'] == tag:
            return random.choice(intent['responses'])
    return "Lo siento, no entiendo la pregunta."

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    question = data['question']

    # Preprocesamiento: convertir texto a secuencia
    sequences = tokenizer.texts_to_sequences([question])
    padded_sequences = tf.keras.preprocessing.sequence.pad_sequences(sequences, maxlen=100)

    # Predicción
    prediction = model.predict(padded_sequences)
    label_index = prediction.argmax()
    tag = labels[str(label_index)]  # Obtener la etiqueta correspondiente
    answer = get_response(tag)  # Obtener respuesta desde intents.json

    return jsonify({'answer': answer})

if __name__ == '__main__':
    app.run(port=5000)

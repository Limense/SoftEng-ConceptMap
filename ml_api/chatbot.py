import json
import numpy as np
import tensorflow as tf
from tensorflow.keras.preprocessing.text import Tokenizer
from tensorflow.keras.preprocessing.sequence import pad_sequences
from tensorflow.keras.models import load_model
import pickle

class NeuralChatbot:
    def __init__(self):
        self.max_words = 1000  # Tamaño del vocabulario
        self.max_len = 100  # Longitud máxima de las secuencias
        self.embedding_dim = 16  # Dimensión del embedding
        self.model_path = 'modelo_chatbot.h5'
        self.tokenizer_path = 'tokenizer_chatbot.pickle'
        self.labels_path = 'labels_chatbot.json'

        self.load_data()
        self.prepare_data()
        self.load_model()

    def load_data(self):
        with open('intents.json', 'r', encoding='utf-8') as f:
            self.intents = json.load(f)

    def prepare_data(self):
        texts = []
        labels = []
        self.label_mapping = {}

        for i, intent in enumerate(self.intents['intents']):
            for pattern in intent['patterns']:
                texts.append(pattern)
                labels.append(i)
            self.label_mapping[i] = intent['tag']

        self.tokenizer = Tokenizer(num_words=self.max_words, oov_token="<OOV>")
        self.tokenizer.fit_on_texts(texts)

        self.X = self.tokenizer.texts_to_sequences(texts)
        self.X = pad_sequences(self.X, maxlen=self.max_len)
        self.y = tf.keras.utils.to_categorical(labels)

        with open(self.tokenizer_path, 'wb') as handle:
            pickle.dump(self.tokenizer, handle)
        with open(self.labels_path, 'w') as f:
            json.dump(self.label_mapping, f)

    def load_model(self):
        self.model = load_model(self.model_path)

    def get_response(self, user_input):
        sequence = self.tokenizer.texts_to_sequences([user_input])
        padded_sequence = pad_sequences(sequence, maxlen=self.max_len)

        prediction = self.model.predict(padded_sequence)
        predicted_index = np.argmax(prediction, axis=1)[0]
        tag = self.label_mapping[predicted_index]

        # Obtener la respuesta basada en el tag
        for intent in self.intents['intents']:
            if intent['tag'] == tag:
                return np.random.choice(intent['responses'])  # Escoge una respuesta aleatoria

        return "Lo siento, no estoy seguro de cómo responder a esa pregunta. Puedes preguntar sobre: - Metodologías ágiles - Scrum - UML - Pruebas de software"

if __name__ == "__main__":
    NeuralChatbot()

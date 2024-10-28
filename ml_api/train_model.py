import json
import numpy as np
import tensorflow as tf
from tensorflow.keras.preprocessing.text import Tokenizer
from tensorflow.keras.preprocessing.sequence import pad_sequences
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, Embedding, LSTM
import pickle

# Parámetros
max_words = 1000  # Tamaño del vocabulario
max_len = 100  # Longitud máxima de las secuencias
embedding_dim = 16  # Dimensión del embedding
batch_size = 5
epochs = 100

# Cargar datos
with open('intents.json', 'r', encoding='utf-8') as f:
    intents = json.load(f)

# Preparar datos
texts = []
labels = []
label_mapping = {}

for i, intent in enumerate(intents['intents']):
    for pattern in intent['patterns']:
        texts.append(pattern)
        labels.append(i)
    label_mapping[i] = intent['tag']

# Tokenización
tokenizer = Tokenizer(num_words=max_words, oov_token="<OOV>")
tokenizer.fit_on_texts(texts)

X = tokenizer.texts_to_sequences(texts)
X = pad_sequences(X, maxlen=max_len)
y = tf.keras.utils.to_categorical(labels)

# Construcción del modelo
model = Sequential()
model.add(Embedding(input_dim=max_words, output_dim=embedding_dim, input_length=max_len))
model.add(LSTM(64, return_sequences=True))
model.add(LSTM(32))
model.add(Dense(len(label_mapping), activation='softmax'))

# Compilación del modelo
model.compile(loss='categorical_crossentropy', optimizer='adam', metrics=['accuracy'])

# Entrenamiento del modelo
model.fit(X, y, batch_size=batch_size, epochs=epochs)

# Guardar el modelo
model.save('modelo_chatbot.h5')

# Guardar el tokenizer
with open('tokenizer_chatbot.pickle', 'wb') as handle:
    pickle.dump(tokenizer, handle)

# Guardar el mapeo de etiquetas
with open('labels_chatbot.json', 'w') as f:
    json.dump(label_mapping, f)

print("Modelo entrenado y guardado con éxito.")

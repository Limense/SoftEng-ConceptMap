# Aprendizaje Profundo (Deep Learning) - LSTM (Long Short-Term Memory) - Lengauje natural
# LSTM (Long Short-Term Memory).

import json
import numpy as np
import tensorflow as tf # Framework principal
from tensorflow.keras.preprocessing.text import Tokenizer # Convert tex a number
from tensorflow.keras.preprocessing.sequence import pad_sequences
from tensorflow.keras.models import Sequential # Modelo secuencial en capas
from tensorflow.keras.layers import Dense, Embedding, LSTM # Capas de la red neuronal
import pickle # Guardar el modelo

# Hiperparámetros
max_words = 1000  # Tamaño del vocabulario
max_len = 100  # Longitud máxima de las secuencias
embedding_dim = 16  # Dimensión del embedding
batch_size = 5
epochs = 100 # iteracciones

# Cargar datos
with open('intents.json', 'r', encoding='utf-8') as f:
    intents = json.load(f)

# Preparar datos - para almacenar datos de entrenamiento
texts = []
labels = []
label_mapping = {}

# Procesamiento de los intents y sus patrones
for i, intent in enumerate(intents['intents']):
    for pattern in intent['patterns']:
        texts.append(pattern)  # Agrega el patron de texto
        labels.append(i)   # Agrega la etiqueta
    label_mapping[i] = intent['tag']

# Tokenización - texto a secuencia de números
tokenizer = Tokenizer(num_words=max_words, oov_token="<OOV>") # Out of Vocabulary
tokenizer.fit_on_texts(texts) # vocabulario

# Convertir texto a secuencia de números
X = tokenizer.texts_to_sequences(texts)
X = pad_sequences(X, maxlen=max_len)
y = tf.keras.utils.to_categorical(labels)

# Construcción del modelo - Arquitectura LSTM
model = Sequential([
    # Capa de Embedding: Convierte índices de palabras en vectores densos
    Embedding(input_dim=max_words,  # Tamaño del vocabulario
              output_dim=embedding_dim,  # Dimensionalidad del espacio vectorial
              input_length=max_len),  # Longitud de las secuencias de entrada

    # Primera capa LSTM: Procesa secuencias y mantiene estado
    LSTM(64,  # Número de unidades LSTM
         return_sequences=True),  # Retorna secuencias para la siguiente capa LSTM

    # Segunda capa LSTM: Procesa la salida de la primera LSTM
    LSTM(32),  # Capa LSTM más pequeña para reducir dimensionalidad

    # Capa de salida: Clasificación final
    Dense(len(label_mapping),  # Número de clases (intenciones)
          activation='softmax')  # Función de activación para clasificación multiclase
])

# Compilación del modelo
model.compile(
    loss='categorical_crossentropy',
    optimizer='adam', # Optimizador
    metrics=['accuracy'] # Métrica de evaluación
)

# Entrenamiento del modelo
model.fit(
    X, # Entrada
    y, # Etiquetas
    batch_size=batch_size,
    epochs=epochs # Numero de iteracciones
)

# Guardar el modelo
model.save('modelo_chatbot.h5')

# Guardar el tokenizer
with open('../tokenizer_chatbot.pickle', 'wb') as handle:
    pickle.dump(tokenizer, handle)

# Guardar el mapeo de etiquetas
with open('../labels_chatbot.json', 'w') as f:
    json.dump(label_mapping, f)

print("Modelo entrenado y guardado con éxito.")

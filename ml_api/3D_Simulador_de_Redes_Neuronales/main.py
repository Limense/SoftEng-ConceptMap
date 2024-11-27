import streamlit as st
import tensorflow as tf
import numpy as np
import plotly.graph_objs as go
import plotly.express as px


class NeuralNetworkSimulator:
    def __init__(self, input_dim=3, hidden_layers=[4, 3], output_dim=1):
        """
        Inicializa el simulador de red neuronal con dimensiones configurables

        Args:
            input_dim (int): Número de neuronas de entrada
            hidden_layers (list): Número de neuronas en cada capa oculta
            output_dim (int): Número de neuronas de salida
        """
        self.input_dim = input_dim
        self.hidden_layers = hidden_layers
        self.output_dim = output_dim
        self.model = self.build_model()

    def build_model(self):
        """Construye el modelo de red neuronal con TensorFlow"""
        model = tf.keras.Sequential()

        # Capa de entrada
        model.add(tf.keras.layers.InputLayer(input_shape=(self.input_dim,)))

        # Capas ocultas
        for neurons in self.hidden_layers:
            model.add(tf.keras.layers.Dense(neurons, activation='relu',
                                            kernel_initializer='random_normal'))

        # Capa de salida
        model.add(tf.keras.layers.Dense(self.output_dim, activation='sigmoid'))

        model.compile(optimizer='adam', loss='binary_crossentropy')
        return model

    def generate_3d_visualization(self):
        """
        Genera una visualización 3D de la arquitectura de la red neuronal

        Returns:
            plotly graph object con la visualización de la red
        """
        layers = [self.input_dim] + self.hidden_layers + [self.output_dim]

        # Generar coordenadas 3D para las neuronas
        positions = []
        for i, layer_size in enumerate(layers):
            layer_positions = []
            for j in range(layer_size):
                x = i * 5  # Separación horizontal entre capas
                y = j - (layer_size - 1) / 2  # Centrar verticalmente
                z = np.random.uniform(-2, 2)  # Profundidad aleatoria
                layer_positions.append([x, y, z])
            positions.append(layer_positions)

        # Preparar datos para el gráfico
        x_coords, y_coords, z_coords = [], [], []
        lines_x, lines_y, lines_z = [], [], []

        # Nodos
        for layer in positions:
            for x, y, z in layer:
                x_coords.append(x)
                y_coords.append(y)
                z_coords.append(z)

        # Conexiones
        for i in range(len(positions) - 1):
            for j, (x1, y1, z1) in enumerate(positions[i]):
                for k, (x2, y2, z2) in enumerate(positions[i + 1]):
                    lines_x.extend([x1, x2, None])
                    lines_y.extend([y1, y2, None])
                    lines_z.extend([z1, z2, None])

        # Crear figura 3D
        fig = go.Figure()

        # Añadir nodos
        fig.add_trace(go.Scatter3d(
            x=x_coords, y=y_coords, z=z_coords,
            mode='markers',
            marker=dict(
                size=10,
                color=list(range(len(x_coords))),
                colorscale='Viridis',
                opacity=0.8
            ),
            text=[f'Neurona {i}' for i in range(len(x_coords))],
            hoverinfo='text'
        ))

        # Añadir conexiones
        fig.add_trace(go.Scatter3d(
            x=lines_x, y=lines_y, z=lines_z,
            mode='lines',
            line=dict(color='lightgrey', width=2),
            opacity=0.3
        ))

        fig.update_layout(
            title='Arquitectura de Red Neuronal 3D',
            scene=dict(
                xaxis_title='Capas',
                yaxis_title='Neuronas',
                zaxis_title='Profundidad'
            ),
            width=800,
            height=600
        )

        return fig


def main():
    st.title('Simulador de Redes Neuronales en 3D 🧠')

    # Sidebar para configuración
    st.sidebar.header('Configuración de Red Neuronal')

    # Selección de dimensiones
    input_neurons = st.sidebar.slider('Neuronas de Entrada', 1, 10, 3)
    output_neurons = st.sidebar.slider('Neuronas de Salida', 1, 5, 1)

    # Capas ocultas dinámicas
    num_hidden_layers = st.sidebar.number_input('Número de Capas Ocultas', 1, 5, 2)
    hidden_layers = []
    for i in range(num_hidden_layers):
        neurons = st.sidebar.slider(f'Neuronas en Capa Oculta {i + 1}', 1, 10, 4)
        hidden_layers.append(neurons)

    # Crear simulador
    nn_simulator = NeuralNetworkSimulator(
        input_dim=input_neurons,
        hidden_layers=hidden_layers,
        output_dim=output_neurons
    )

    # Visualización 3D
    st.header('Visualización de Arquitectura')
    fig = nn_simulator.generate_3d_visualization()
    st.plotly_chart(fig, use_container_width=True)

    # Información del modelo
    st.header('Detalles del Modelo')
    model_summary = []
    nn_simulator.model.summary(print_fn=lambda x: model_summary.append(x))
    st.code('\n'.join(model_summary))

    # Sección de entrenamiento simulado
    st.header('Entrenamiento Simulado')
    if st.button('Entrenar Red Neuronal'):
        # Generar datos de ejemplo
        X = np.random.rand(100, input_neurons)
        y = np.random.randint(2, size=(100, output_neurons))

        history = nn_simulator.model.fit(
            X, y,
            epochs=50,
            validation_split=0.2,
            verbose=0
        )

        # Graficar pérdida
        loss_fig = go.Figure()
        loss_fig.add_trace(go.Scatter(
            y=history.history['loss'],
            name='Pérdida de Entrenamiento'
        ))
        loss_fig.add_trace(go.Scatter(
            y=history.history['val_loss'],
            name='Pérdida de Validación'
        ))
        loss_fig.update_layout(
            title='Curva de Pérdida Durante el Entrenamiento',
            xaxis_title='Época',
            yaxis_title='Pérdida'
        )
        st.plotly_chart(loss_fig)


if __name__ == '__main__':
    main()

import streamlit as st
from chatbot import NeuralChatbot

# Configuración de la página
st.set_page_config(
    page_title="Chatbot con IA - Ingeniería de Software",
    page_icon="🤖",
    layout="wide"
)

# Inicialización del chatbot
@st.cache_resource
def init_neural_chatbot():
    return NeuralChatbot()

chatbot = init_neural_chatbot()

# UI del chatbot
st.title("🤖 Asistente IA de Ingeniería de Software")

# Sidebar
with st.sidebar:
    st.header("Información")
    st.write("""
    Este chatbot utiliza una red neuronal para:
    - Entender el contexto de las preguntas
    - Aprender patrones en el lenguaje
    - Proporcionar respuestas más precisas
    - Mejorar con el tiempo
    """)

    if st.button("Limpiar Chat"):
        st.session_state.messages = []
        st.rerun()

    st.divider()

    # Métricas
    st.subheader("Estadísticas")
    if 'messages' not in st.session_state:
        st.session_state.messages = []

    col1, col2 = st.columns(2)
    with col1:
        st.metric("Total Mensajes", len(st.session_state.messages))
    with col2:
        user_msgs = len([m for m in st.session_state.messages if m["role"] == "user"])
        st.metric("Preguntas", user_msgs)

# Chat UI
for message in st.session_state.messages:
    with st.chat_message(message["role"]):
        st.markdown(message["content"])

# Input y procesamiento
if prompt := st.chat_input("Escribe tu pregunta aquí..."):
    st.session_state.messages.append({"role": "user", "content": prompt})
    with st.chat_message("user"):
        st.markdown(prompt)

    response = chatbot.get_response(prompt)
    st.session_state.messages.append({"role": "assistant", "content": response})
    with st.chat_message("assistant"):
        st.markdown(response)

# Estilos CSS
st.markdown("""
    <style>
    .stChatMessage {
        padding: 1.2rem;
        border-radius: 0.8rem;
        margin-bottom: 1.2rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .stChatMessage[data-role="user"] {
        background-color: #e6f3ff;
        border-left: 4px solid #2196F3;
    }

    .stChatMessage[data-role="assistant"] {
        background-color: #f0f2f6;
        border-left: 4px solid #4CAF50;
    }
    </style>
""", unsafe_allow_html=True)

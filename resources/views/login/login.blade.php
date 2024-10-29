<section style="background-image: url('/images/fondo_login.png');"
    class="flex flex-col items-center text-center p-10 sm:p-20 bg-cover bg-center min-h-[calc(100vh-60px)]">
    <div class="relative w-[30rem] text-[12px] bg-primary border-4 border-secondary py-[1rem] px-[1.5rem] font-mulish">
        <div class="gap-[1.5rem] flex w-full items-center my-[0.5rem] pb-5">
            <img src="{{ asset('images/charmander.png') }}" alt="Descripción de la imagen"
                class="block max-w-full w-[30%]">
            <p class="text-[14px] font-press-start text-white">¡Inicia sesión para guardar tu progreso!</p>
        </div>

        <div class="flip-container">
            <div class="flip-card">
                <!-- Formulario de inicio de sesión -->
                <form id="login-form" class="w-full max-w-md mx-auto pt-5">
                    <div class="mb-10">
                        <label for="email" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                            Correo Electrónico
                        </label>
                        <input type="email" id="email"
                            class="w-[calc(100%-8px)] px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                            placeholder="Ingresa tu dirección de correo electrónico" required />
                    </div>
                    <div class="mb-10">
                        <label for="password" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                            Contraseña
                        </label>
                        <input type="password" id="password"
                            class="w-[calc(100%-8px)] px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                            placeholder="Ingresa tu contraseña" required />
                    </div>

                    <x-button href="{{ url('/login') }}" bgColor="bg-red-primary" textColor="text-white"
                        beforeColor="red-button">
                        Acceder
                    </x-button>
                    <h4 class="font-medium text-[14px] py-5">
                        <a href="javascript:void(0);" onclick="showRecoverForm()" class="text-skyblue-primary">¿Has
                            olvidado tu
                            contraseña?</a>
                    </h4>
                    <h4 class="font-medium text-[14px] pb-5 text-white">
                        ¿Aún no tienes cuenta? <a href="{{ url('/register') }}"
                            class="text-skyblue-primary">¡Regístrate!</a>
                    </h4>
                </form>

                <!-- Formulario de recuperación de contraseña -->
                <form id="recover-form" class="w-full max-w-md mx-auto pt-5 hidden">
                    <div class="mb-5">
                        <label for="recover-email" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                            Ingresa tu correo electrónico para recuperar la contraseña
                        </label>
                        <input type="email" id="recover-email"
                            class="w-[calc(100%-8px)] px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                            placeholder="Ingresa tu dirección de correo electrónico" required />
                    </div>
                    <x-button href="{{ url('/recover-password') }}" bgColor="bg-skyblue-primary" textColor="text-white"
                        beforeColor="sky-button">
                        Enviar
                    </x-button>

                    <h4 class="font-medium text-[14px] py-5">
                        <a href="javascript:void(0);" onclick="showLoginForm()" class="text-skyblue-primary">Volver a
                            Iniciar
                            Sesión</a>
                    </h4>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.flip-container {
    perspective: 1000px;
}

.flip-card {
    position: relative;
    width: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.flip-card.flip {
    transform: rotateY(90deg);
}

.flip-card>div {
    position: absolute;
    width: 100%;
    backface-visibility: hidden;
}
</style>

<script>
function showRecoverForm() {
    const card = document.querySelector(".flip-card");
    card.classList.add("flip");

    setTimeout(() => {
        document.getElementById("login-form").classList.add("hidden");
        document.getElementById("recover-form").classList.remove("hidden");
        card.classList.remove("flip");
    }, 500);
}

function showLoginForm() {
    const card = document.querySelector(".flip-card");
    card.classList.add("flip");

    setTimeout(() => {
        document.getElementById("recover-form").classList.add("hidden");
        document.getElementById("login-form").classList.remove("hidden");
        card.classList.remove("flip");
    }, 500);
}
</script>

@vite('resources/js/annyang.js')
@vite('resources/js/comandos.js')
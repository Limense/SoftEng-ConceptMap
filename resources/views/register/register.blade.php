<section style="background-image: url('/images/fondo_register.png');"
    class="flex flex-col items-center text-center p-10 sm:p-20 bg-cover bg-center min-h-[calc(100vh-60px)]">
    <div class="relative w-[30rem] text-[12px] bg-primary border-4 border-secondary py-[1rem] px-[1.5rem] font-mulish">
        <div class="gap-[1.5rem] flex w-full items-center my-[0.5rem]">
            <img src="{{ asset('images/mario.png') }}" alt="Descripción de la imagen" class="block max-w-full w-[18%]">
            <p class="text-[14px] font-press-start text-white">¡Crea una cuenta para guardar tu progreso!</p>
        </div>

        <div class="flip-container">
            <div class="flip-card">
                <!-- Formulario de inicio de sesión -->
                <form id="login-form" class="w-full max-w-md mx-auto pt-5">
                    <div class="mb-5 flex justify-between">
                        <div class="w-[48%]">
                            <label for="name" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                                Nombres
                            </label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                                placeholder="Ingresa tus nombres" required />
                        </div>
                        <div class="w-[48%]">
                            <label for="surname" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                                Apellidos
                            </label>
                            <input type="text" id="surname"
                                class="w-full px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                                placeholder="Ingresa tus apellidos" required />
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                            Correo Electrónico
                        </label>
                        <input type="email" id="email"
                            class="w-[calc(100%-8px)] px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                            placeholder="Ingresa tu dirección de correo electrónico" required />
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                            Contraseña
                        </label>
                        <input type="password" id="password"
                            class="w-[calc(100%-8px)] px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                            placeholder="Ingresa tu contraseña" required />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-[0.2rem] text-sm font-extrabold text-white">
                            Repite Contraseña
                        </label>
                        <input type="password" id="password"
                            class="w-[calc(100%-8px)] px-4 py-2 m-1 border-4 border-solid border-secondary bg-profile-primary"
                            placeholder="Vuelve a ingresar tu contraseña" required />
                    </div>

                    <x-button href="#" bgColor="bg-red-primary" textColor="text-white" beforeColor="red-button">
                        Registrar
                    </x-button>
                    <h4 class="font-medium text-[14px] py-5 text-white">
                        ¿Ya tienes una cuenta? <a href="{{ url('/login') }}" class="text-skyblue-primary">¡Inicia
                            Sesión!</a>
                    </h4>
                </form>
            </div>
        </div>
    </div>
</section>
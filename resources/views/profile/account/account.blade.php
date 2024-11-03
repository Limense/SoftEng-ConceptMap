<section class="mb-[5rem] px-[240px] pt-[40px]">
    <form action="">
        <div class="border-[3px] border-white box-border">
            <!-- Cabecera -->
            <div class="bg-skyblue-primary box-border">
                <h1 class="text-white font-press-start h-[60px] pt-[1.1rem] pl-[2rem] font-extrabold text-[20px]">
                    Información
                    personal</h1>
            </div>

            <!-- Cuerpo -->
            <div class="pl-[2rem] pb-[1.5rem]">
                <div>
                    <!-- Datos Personales -->
                    <div class="grid grid-cols-[2fr_1fr]">
                        <!-- inputs -->
                        <div class="mb-0 text-white font-mulish font-extrabold w-full inline-block mt-[1.5rem]">
                            <div class="grid grid-cols-2">
                                <label for="name" class="">
                                    NOMBRES
                                    <br>
                                    <input type="text"
                                        class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-white bg-profile-primary">
                                </label>

                                <label for="lastname" class="">
                                    APELLIDOS
                                    <br>
                                    <input type="text"
                                        class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-white bg-profile-primary">
                                </label>
                            </div>
                            <div class="grid grid-cols-2">
                                <label for="name" class="">
                                    NOMBRE DE USUARIO
                                    <br>
                                    <input type="text"
                                        class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-white bg-profile-primary">
                                </label>

                                <label for="lastname" class="">
                                    CORREO ELECTRÓNICO
                                    <br>
                                    <span
                                        class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-secondary bg-profile-secondary block text-primary">
                                        pierodanielllanossanchez@gmail.com
                                    </span>
                                </label>
                            </div>
                        </div>
                        <!-- Foto de perfil -->
                        <div class="relative flex flex-col items-center mt-[1.5rem] h-[210px] pt-[15px] text-white">
                            <div class="relative flex flex-col items-center">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocJRr2MWdIsMmw0L41BcHWWMpPL3PSiHUzWGtkmUn5ccVlGDqg=s96-c"
                                    alt="" class="w-[150px] h-[150px] rounded-full border-[3px] border-white">
                                <div class="flex justify-center mt-4">
                                    <x-button href="#" bgColor="bg-skyblue-primary" textColor="text-white"
                                        beforeColor="sky-button">
                                        Editar foto
                                    </x-button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Información personal -->
                    <div class="pr-[2rem] text-white font-mulish font-extrabold">
                        <div class="grid grid-cols-2">
                            <label for="location" class="">
                                EDUCACIÓN
                                <br>
                                <input type="text"
                                    class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-white bg-profile-primary">
                            </label>
                            <label for="work" class="">
                                TRABAJO
                                <br>
                                <input type="text"
                                    class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-white bg-profile-primary">
                            </label>
                        </div>
                        <label for="bio" class="">
                            BIOGRAFÍA
                            <br>
                            <textarea name="" id=""
                                class="w-[calc(100%-8px)] py-[.5rem] px-[1rem] m-1 mt-[15px] mb-6 text-sm border-4 border-solid border-white bg-profile-primary"></textarea>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenedor de botones -->
        <div class="flex flex-row gap-[2rem] justify-center pt-[30px]">
            <x-button href="{{ url('/register') }}" bgColor="bg-red-primary" textColor="text-white"
                beforeColor="red-button">
                Guardar cambios
            </x-button>

            <!-- Modal toggle -->
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="h-auto  mb-[3px] bg-yellow-primary text-primary yellow-button flex text-[15px] items-center py-[5px] px-[10px] font-mulish font-bold relative"
                type="button">
                Cambiar Contraseña
            </button>

            <!-- Incluir el modal -->
            @include('modals.set_password')

            <x-button href="{{ url('/profile') }}" bgColor="bg-white" textColor="text-primary"
                beforeColor="white-button">
                Ver Perfil
            </x-button>
        </div>
    </form>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modalToggle = document.querySelector('[data-modal-toggle="authentication-modal"]');
    const modal = document.getElementById('authentication-modal');
    const closeModalButton = modal.querySelector('[data-modal-hide="authentication-modal"]');

    // Abrir modal
    modalToggle.addEventListener('click', function() {
        modal.classList.remove('hidden');
    });

    // Cerrar modal
    closeModalButton.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
});
</script>
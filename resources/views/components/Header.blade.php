<header class="flex px-6 h-[62px] bg-primary justify-center border-b-2 border-secondary relative">
    <div class="flex items-center justify-between w-[1160px] max-w-[1210px] h-full">
        <h2 class="flex items-center">
            <div class="overflow-hidden">
                <img src="{{ asset('images/UNDC.png') }}" alt="Descripción de la imagen" class="h-[30px] w-auto">
            </div>
            <a href="#" class="font-press-start text-white font-bold ml-2"> UNDC</a>
        </h2>

        <!-- Botón de menú hamburguesa -->
        <button id="menu-toggle" class="md:hidden text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <div class="hidden md:flex h-full items-center gap-2 " id="menu">
            <div
                class="h-full text-white font-mulish font-bold flex items-center border-b-2 border-transparent hover:text-skyblue-primary hover:border-skyblue-primary hover:border-b-2">
                <a href="{{ url('/') }}">
                    <button class="py-2 px-3 rounded-md">Inicio</button>
                </a>
            </div>

            <div
                class="h-full text-white font-mulish font-bold flex items-center border-b-2 border-transparent hover:text-skyblue-primary hover:border-skyblue-primary hover:border-b-2">
                <a href="{{ url('/ranking') }}">
                    <button class="py-2 px-3 rounded-md">Ranking</button>
                </a>
            </div>

            <x-button href="{{ url('/login') }}" bgColor="bg-yellow-primary" textColor="text-black" class="edu-button"
                beforeColor="yellow-button">
                Iniciar Sesión
            </x-button>

            <x-button href="{{ url('/register') }}" bgColor="bg-red-primary" textColor="text-white"
                beforeColor="red-button">
                Registrate
            </x-button>

        </div>
    </div>

    <!-- Menú lateral -->
    <div id="side-menu"
        class="fixed top-0 left-0 w-2/3 h-full bg-gray-800 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="p-4">
            <button id="close-menu" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex flex-col mt-4">
                <a href="#" class="text-white py-2">Inicio</a>
                <a href="#" class="text-white py-2">Módulos</a>
                <a href="#" class="text-white py-2">Progreso</a>
            </div>
        </div>
    </div>
</header>
<section class="flex flex-col items-center text-center p-10 sm:p-20 min-h-screen"
    style="background-image: url('/images/banner-first.gif'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div
        class="font-press-start text-red-primary font-extrabold text-[25px] sm:text-[40px] md:text-[40px] lg:text-[60px] floating-text">
        Domina los fundamentos de la Ingeniería de Software
    </div>




    <div class="my-0 mx-auto items-center max-w-[800px]">
        <div class="grid grid-cols-2 gap-4 pt-[64px] w-full">
            <a href="{{ url('/modulo-1') }}">
                <article
                    class="flex items-center relative rounded-[8px] bg-primary border-[3px] border-secondary p-4 h-[220px] shadow-md transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('images/torchic.png') }}" alt="Descripción de la imagen"
                        class="w-[10rem] h-auto transition-transform duration-300 hover:-translate-y-2">
                    <div class="flex flex-col justify-center ml-4">
                        <span class="text-[80px] font-press-start text-white">01</span>
                        <span
                            class="relative rounded-full bg-skyblue-primary font-mulish px-3 text-center text-primary font-extrabold">
                            Módulo
                        </span>
                    </div>
                </article>
            </a>

            <a href="{{ url('/modulo-1') }}">
                <article
                    class="flex items-center relative rounded-[8px] bg-primary border-[3px] border-secondary p-4 h-[220px] shadow-md transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('images/combusken.png') }}" alt="Descripción de la imagen"
                        class="w-[10rem] h-auto transition-transform duration-300 hover:-translate-y-2">
                    <div class="flex flex-col justify-center ml-4">
                        <span class="text-[80px] font-press-start text-white">02</span>
                        <span
                            class="relative rounded-full bg-skyblue-primary font-mulish px-3 text-center text-primary font-extrabold">
                            Módulo
                        </span>
                    </div>
                </article>
            </a>

            <a href="{{ url('/modulo-1') }}">
                <article
                    class="flex items-center relative rounded-[8px] bg-primary border-[3px] border-secondary p-4 h-[220px] shadow-md transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('images/blaziken.png') }}" alt="Descripción de la imagen"
                        class="w-[10rem] h-[160px] transition-transform duration-300 hover:-translate-y-2">
                    <div class="flex flex-col justify-center ml-4">
                        <span class="text-[80px] font-press-start text-white">03</span>
                        <span
                            class="relative rounded-full bg-skyblue-primary font-mulish px-3 text-center text-primary font-extrabold">
                            Módulo
                        </span>
                    </div>
                </article>
            </a>

            <a href="{{ url('/modulo-1') }}">
                <article
                    class="flex items-center relative rounded-[8px] bg-primary border-[3px] border-secondary p-4 h-[220px] shadow-md transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('images/mega_blaziken.png') }}" alt="Descripción de la imagen"
                        class="w-[10rem] h-auto transition-transform duration-300 hover:-translate-y-2">
                    <div class="flex flex-col justify-center ml-4">
                        <span class="text-[80px] font-press-start text-white">04</span>
                        <span
                            class="relative rounded-full bg-skyblue-primary font-mulish px-3 text-center text-primary font-extrabold">
                            Módulo
                        </span>
                    </div>
                </article>
            </a>
        </div>
    </div>

</section>

<style>
@keyframes float {

    0%,
    100% {
        transform: translateY(0);
        /* Posición inicial */
    }

    50% {
        transform: translateY(-10px);
        /* Desplazamiento hacia arriba */
    }
}

/* Aplicar la animación al texto */
.floating-text {
    animation: float 2s ease-in-out infinite;
}
</style>
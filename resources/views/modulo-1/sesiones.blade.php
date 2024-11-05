<section class="flex flex-col items-center text-center min-h-screen w-full bg-cover bg-center"
    style="background-image: url('/images/sesiones.gif'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="flex w-full max-w-[1140px] px-[0.2%]">
        <div class="w-full pt-[30px] pb-[30px]">
            <div
                class="flex flex-col pt-[30px] min-h-[250px] border-[3px] border-secondary bg-profile-primary text-white w-full rounded-[25px] overflow-hidden">
                <div class="w-full m-auto px-[3rem] pt-11">
                    <h2 class="mb-[30px] text-[30px] text-center font-press-start text-yellow-primary">
                        Modulo 01
                    </h2>
                    <p class="mb-[30px] text-[18px] text-center font-mulish">
                        <span>
                            Este módulo de Ingeniería de Software se compone de cuatro sesiones que cubren los aspectos
                            clave del desarrollo de software, desde los principios fundamentales hasta la implementación
                            y
                            el aseguramiento de calidad. Cada sesión está diseñada para brindar conocimientos prácticos
                            y
                            teóricos, fortaleciendo las habilidades necesarias para gestionar proyectos de software de
                            manera efectiva.
                        </span>
                    </p>
                    <div class="pb-[20px]">
                        <x-button href="{{ url('/') }}" bgColor="bg-green-primary" textColor="text-black"
                            beforeColor="green-button">
                            Ver módulos
                        </x-button>
                    </div>
                </div>
            </div>

            @include('modulo-1.cards')

        </div>
    </div>
</section>
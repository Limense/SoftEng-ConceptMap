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
                            En esta sesión, analizaremos los fundamentos de la ingeniería de software, centrándonos en
                            su origen, objetivos y principios. Exploraremos los conceptos de calidad y su evolución, así
                            como los modelos que guían la evaluación del software. También discutiremos las herramientas
                            de planificación y desarrollo que facilitan la implementación efectiva del software.
                            Finalmente, abordaremos las normas y estándares de calidad, como los establecidos por ISO,
                            IEEE e IEC, que son esenciales para asegurar la calidad en cada etapa del desarrollo del
                            software. Este enfoque integral nos permitirá comprender la relevancia de estos temas en la
                            creación de productos de software confiables y eficientes.
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
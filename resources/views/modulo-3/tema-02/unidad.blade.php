<div id="content-unidad" class="content hidden">
    <div class="flex gap-[10px] w-full pb-[20px]">
        <div
            class="border-2 border-secondary rounded-[25px] text-white flex flex-col items-center gap-[0.5rem] pt-[30px] font-press-start w-full box-border">
            <p class="text-[30px] text-center">INTRODUCCION</p>
            <span class="text-[18px] text-skyblue-primary font-mulish text-center px-10 py-6">
                La calidad del software es fundamental en el desarrollo de sistemas informáticos, ya que mide la
                capacidad del software para satisfacer las expectativas del usuario y su rendimiento a lo largo del
                tiempo. Su evolución ha pasado de enfoques centrados en el producto a perspectivas que abarcan todo el
                ciclo de vida del software. Modelos como ISO/IEC 25010 y CMMI proporcionan marcos para evaluar
                características como funcionalidad y usabilidad, mientras que los criterios de calidad, que incluyen
                métricas como la satisfacción del usuario y la cantidad de defectos, son esenciales para medir su
                efectividad. La implementación de buenas prácticas en calidad no solo mejora el producto final, sino que
                también optimiza el proceso de desarrollo y reduce costos, asegurando una experiencia satisfactoria para
                el usuario.
            </span>
        </div>
    </div>
    <div class="w-full mb-0">
        <div class="relative w-full h-0" style="padding-bottom: 40%;">
            <iframe src="https://www.youtube.com/embed/2CmjKB4u2RY" frameborder="0"
                class="absolute top-0 left-0 w-full h-full" allowfullscreen style="margin: 0; padding: 0;"></iframe>
        </div>
    </div>
    <div class="pt-[15px] px-[15px]">
        <div class="relative w-full px-[15px]">
            <p class="text-[24px] font-semibold mb-[1rem] text-white">
                Descarga los siguientes documentos para reforzar lo aprendido.
            </p>
            <div
                class="border-[1px] border-secondary box-border rounded-[10px] mb-[1.5rem] mx-0 flex items-center justify-between px-[15px]">
                <div class="flex items-center space-x-[10px]">
                    <div class="py-[1rem]">
                        <img src="{{ asset('images/files.png') }}" alt="Descripción de la imagen"
                            class="h-[48px] w-auto">
                    </div>
                    <p class="text-[18px] font-normal text-white my-auto">Refuerza tus conocimientos</p>
                </div>
                <div>
                    <x-button href="{{ route('download-folder', ['folder' => 'tema02']) }}" bgColor="bg-red-primary"
                        textColor="text-white" beforeColor="red-button">
                        Descargar
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</div>
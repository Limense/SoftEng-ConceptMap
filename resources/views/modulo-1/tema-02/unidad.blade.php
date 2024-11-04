<div id="content-unidad" class="content hidden">
    <div class="flex gap-[10px] w-full pb-[20px]">
        <div
            class="border-2 border-secondary rounded-[25px] text-white flex flex-col items-center gap-[0.5rem] pt-[30px] font-press-start w-full box-border">
            <p class="text-[30px] text-center">INTRODUCCION</p>
            <span class="text-[18px] text-skyblue-primary font-mulish text-center p-10">
                La ingeniería de Software surge en los años 60 por la crisis del software por la
                necesidad de mejorar la calidad, fiabilidad y el costo de los proyectos de software. La
                Ingeniería de Software buscó abordar estos problemas mediante enfoques sistemáticos. Su
                finalidad es maximizar la eficiencia en el desarrollo de software. Garantizar la calidad
                y fiabilidad del software. Adaptar y escalar el software según las necesidades del
                entorno. Sus principios fundamentales son la modularidad, abstracción, reusabilidad,
                verificación y validación.
                La Ingeniería de Software permite el desarrollo controlado y eficiente de sistemas
                complejos. Sus principios y características aseguran la calidad, flexibilidad y
                adaptabilidad del software.
            </span>
        </div>
    </div>
    <div class="w-full mb-0">
        <div class="relative w-full h-0" style="padding-bottom: 40%;">
            <iframe src="https://www.youtube.com/embed/B9jcCjfK1_Y" frameborder="0"
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
                    <x-button href="{{ route('download.folder', ['folder' => 'tema01']) }}" bgColor="bg-red-primary"
                        textColor="text-white" beforeColor="red-button">
                        Descargar
                    </x-button>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="content-unidad" class="content hidden">
    <div class="flex gap-[10px] w-full pb-[20px]">
        <div
            class="border-2 border-secondary rounded-[25px] text-white flex flex-col items-center gap-[0.5rem] pt-[30px] font-press-start w-full box-border">
            <p class="text-[30px] text-center">INTRODUCCION</p>
            <span class="text-[18px] text-skyblue-primary font-mulish text-center px-10 py-6">
                Las herramientas de planificación, desarrollo, modelamiento y seguimiento son esenciales para la
                implementación exitosa del software, ya que permiten a los equipos gestionar proyectos de manera
                eficiente y eficaz. Estas herramientas facilitan la definición de requisitos, la colaboración entre los
                miembros del equipo y el seguimiento del progreso a lo largo del ciclo de vida del desarrollo. Desde
                software de gestión de proyectos como Jira y Trello hasta herramientas de modelado como UML y lenguajes
                de modelado específicos, cada una desempeña un papel crucial en la creación de productos de software de
                alta calidad. La adecuada integración de estas herramientas no solo mejora la comunicación y la
                organización, sino que también optimiza la asignación de recursos y el cumplimiento de plazos,
                asegurando que el proyecto se mantenga en la dirección correcta y cumpla con las expectativas del
                cliente.
            </span>
        </div>
    </div>
    <div class="w-full mb-0">
        <div class="relative w-full h-0" style="padding-bottom: 40%;">
            <iframe src="https://www.youtube.com/embed/uxlOPJC3NzY" frameborder="0"
                class="absolute top-0 left-0 w-full h-full" allowfullscreen style="margin: 0; padding: 0;">
            </iframe>

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
                    <x-button href="{{ route('download-folder', ['folder' => 'tema03']) }}" bgColor="bg-red-primary"
                        textColor="text-white" beforeColor="red-button">
                        Descargar
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</div>
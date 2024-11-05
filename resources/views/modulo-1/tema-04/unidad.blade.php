<div id="content-unidad" class="content hidden">
    <div class="flex gap-[10px] w-full pb-[20px]">
        <div
            class="border-2 border-secondary rounded-[25px] text-white flex flex-col items-center gap-[0.5rem] pt-[30px] font-press-start w-full box-border">
            <p class="text-[30px] text-center">INTRODUCCION</p>
            <span class="text-[18px] text-skyblue-primary font-mulish text-center px-10 py-6">
                Las normas, estándares y organizaciones de calidad, como ISO (Organización Internacional de
                Normalización), IEEE (Instituto de Ingenieros Eléctricos y Electrónicos) e IEC (Comisión Electrotécnica
                Internacional), desempeñan un papel fundamental en las etapas de desarrollo del software, asegurando que
                los procesos y productos cumplan con criterios específicos de calidad y eficiencia. Estas organizaciones
                establecen directrices que ayudan a los equipos de desarrollo a implementar prácticas consistentes, a
                gestionar riesgos y a mejorar la satisfacción del cliente. La adopción de estándares como ISO/IEC 25010,
                que define la calidad del producto, y IEEE 829, que establece un marco para la documentación de pruebas,
                permite a las empresas no solo cumplir con regulaciones, sino también optimizar su proceso de desarrollo
                y reducir costos. Así, la integración de normas y estándares en el ciclo de vida del software se traduce
                en productos más fiables y efectivos, contribuyendo al éxito y sostenibilidad de los proyectos de
                software.
            </span>
        </div>
    </div>
    <div class="w-full mb-0">
        <div class="relative w-full h-0" style="padding-bottom: 40%;">
            <iframe src="https://www.youtube.com/embed/k-5-gSW-3BA" frameborder="0"
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
                    <x-button href="{{ route('download-folder', ['folder' => 'tema04']) }}" bgColor="bg-red-primary"
                        textColor="text-white" beforeColor="red-button">
                        Descargar
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</div>
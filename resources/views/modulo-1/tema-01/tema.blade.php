<section class="px-[30px] w-full mx-auto box-border">
    <div class="box-border">
        <div class="text-white py-[20px]">
            <x-button href="{{ url('/modulo-1') }}" bgColor="bg-green-primary" textColor="text-black"
                beforeColor="green-button">
                Regresar
            </x-button>
        </div>

        <!-- Lado izquierdo -->
        <div class="flex flex-row">
            @include('modulo-1.tema-01.sidebar')

            <!-- Lado derecho -->
            <div class="basis-[75%] max-w-[75%] relative w-full px-[15px]">
                @include('modulo-1.tema-01.introduccion')

                <div id="content-unidad" class="content hidden">
                    @include('modulo-1.tema-01.unidad')
                </div>

                <div id="content-adicional" class="content hidden">
                    @include('modulo-1.tema-01.evaluacion')
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnIntroduccion = document.getElementById('btn-introduccion');
    const btnUnidad = document.getElementById('btn-unidad');
    const btnContenidoAdicional = document.getElementById('btn-contenido-adicional');
    const contentIntroduccion = document.getElementById('content-introduccion');
    const contentUnidad = document.getElementById('content-unidad');
    const contentAdicional = document.getElementById('content-adicional');

    // Inicialmente, muestra el contenido de introducción y oculta el de unidad y contenido adicional
    contentIntroduccion.classList.remove('hidden');
    contentUnidad.classList.add('hidden');
    contentAdicional.classList.add('hidden');

    // Agregar evento click para el botón de introducción
    btnIntroduccion.addEventListener('click', function(event) {
        event.preventDefault();
        contentIntroduccion.classList.remove('hidden');
        contentUnidad.classList.add('hidden');
        contentAdicional.classList.add('hidden');
    });

    // Agregar evento click para el botón de unidad
    btnUnidad.addEventListener('click', function(event) {
        event.preventDefault();
        contentUnidad.classList.remove('hidden');
        contentIntroduccion.classList.add('hidden');
        contentAdicional.classList.add('hidden');
    });

    // Agregar evento click para el botón de contenido adicional
    btnContenidoAdicional.addEventListener('click', function(event) {
        event.preventDefault();
        contentAdicional.classList.remove('hidden');
        contentIntroduccion.classList.add('hidden');
        contentUnidad.classList.add('hidden');
    });
});
</script>
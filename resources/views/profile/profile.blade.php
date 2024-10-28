<section class="max-w-[1152px] mx-auto">
    <div class="pt-[5.5rem] px-[1rem] flex justify-center">
        <div class="w-full">
            <div
                class="flex flex-col min-h-[250px] border-[3px] border-secondary bg-profile text-white w-full rounded-[25px] overflow-hidden">
                <div class="h-[150px] relative">
                    <img src="{{ asset('images/banner-v2.png') }}" alt=""
                        class="w-full h-full object-cover rounded-[25px">
                    <div
                        class="h-[120px] w-[120px] absolute rounded-[50%] -bottom-[23px] left-[30px] border-[3px] border-secondary overflow-hidden bg-white">
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center relative mt-[35px] mx-[30px] mb-auto">
                    <div class="flex flex-col mb-5">
                        <p class="font-press-start text-sm">PIERO DANIEL LLANOS SANCHEZ</p>
                        <p class="font-mulish font-sm">@pierodls1</p>
                    </div>

                    <div class="">
                        <x-button href="{{ route('profile.account') }}" bgColor="bg-skyblue-primary"
                            textColor="text-white" beforeColor="sky-button">
                            Editar Perfil
                        </x-button>
                    </div>
                </div>
            </div>

            <div class="grid gap-[1rem] mt-[2rem] custom-grid-cols">
                <div class="flex flex-col gap-[2rem]">
                    <div class="relative mb-6 border-t-2 custom-border-top">
                        <p
                            class="font-press-start leading-none text-white w-fit border-2 border-secondary text-[11px] p-[9px] rounded-[12px] absolute top-[-19.5px] left-[12px] bg-primary">
                            Biografía
                        </p>
                    </div>
                    <div
                        class="border-2 border-secondary min-h-[170px] h-fit rounded-[25px] text-white p-[1.5rem] flex flex-col gap-[0.75rem]">
                        <div class="font-mulish text-[14px]">
                            <span>No tienes nada en tu biografía. <a href="{{ route('profile.account') }}"
                                    class="text-red-primary">Ve a tu cuenta</a>
                                y edita el perfil para
                                agregar algo
                                interesante sobre ti.</span>
                        </div>
                        <div class="flex flex-col gap-[5px] text-[13px] font-medium font-mulish">
                            <p class="flex gap-[7px]">
                                <img src="{{ asset('images/location.svg') }}" alt="" class="">
                                <span>Perú</span>
                            </p>
                            <p class="flex gap-[7px]">
                                <img src="{{ asset('images/cap.svg') }}" alt="" class="">
                                <span> Universidad Nacional de Cañete</span>
                            </p>
                            <p class="flex gap-[7px]">
                                <img src="{{ asset('images/briefcase.svg') }}" alt="" class="">
                                <span>Ingenieria de sistemas</span>
                            </p>
                            <p class="flex gap-[7px]">
                                <img src="{{ asset('images/profile.svg') }}" alt="" class="">
                                <span>Se unió el 27 de octubre del 2024</span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col gap-[2rem]">
                    <div class="relative mb-6 border-t-2 custom-border-top">
                        <p
                            class="font-press-start leading-none text-white w-fit border-2 border-secondary text-[11px] p-[9px] rounded-[12px] absolute top-[-19.5px] left-[12px] bg-primary">
                            Estadísticas
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-[10px] font-press-start">
                        <div
                            class="border-2 border-secondary h-[100px] rounded-[25px] text-white flex flex-col items-center gap-[0.5rem] pt-[10px]">
                            <p class="text-[12px]">
                                Temas Realizados
                            </p>
                            <span class="text-[32px] text-red-primary">0</span>
                        </div>

                        <div
                            class="border-2 border-secondary h-[100px] rounded-[25px] text-white flex flex-col items-center gap-[0.5rem] pt-[10px]">
                            <p class="text-[12px]">
                                TOTAL XP
                            </p>
                            <span class="text-[32px] text-skyblue-primary">0</span>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>
</section>


<style>
.custom-border-top {
    border-top-color: rgb(37, 49, 75);
}

.custom-grid-cols {
    grid-template-columns: minmax(0px, 1.35fr) 4fr;
}
</style>
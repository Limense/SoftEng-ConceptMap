<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full overflow-y-auto overflow-x-hidden"
    x-data="{ showPassword: false, showConfirmPassword: false }">
    <!-- Dos variables -->
    <div class="fixed inset-0 bg-black bg-opacity-70"></div> <!-- Fondo oscuro -->
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-primary border-[1px] border-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-white font-press-start">
                    Cambiar Contraseña
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#">
                    <div class="text-white font-mulish">
                        <label for="password" class="block mb-4 text-sm font-medium ">
                            Ingrese Contraseña
                        </label>
                        <div class="relative mb-6">
                            <input type="password" name="password" id="password"
                                class="w-full py-2 pr-10 pl-4 text-sm border-[1px] border-solid border-white bg-profile-primary rounded"
                                placeholder="Ingresa contraseña segura"
                                x-bind:type="showPassword ? 'text' : 'password'">
                            <button type="button" @click="showPassword = !showPassword"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 focus:outline-none">
                                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12c0 3.313 6 9 9 9s9-5.687 9-9-6-9-9-9-9 5.687-9 9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12h3m-3 0h-3m0 0H9m0 0H6" />
                                </svg>
                                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825a4.002 4.002 0 01-3.75 0M15 12a3 3 0 11-6 0m6 0c.9-1.9 1.575-3 3-4.5M9 12a3 3 0 01-3-3m0 3c-1.575 1.5-2.1 2.6-3 4.5M3 12c0 3.313 6 9 9 9s9-5.687 9-9-6-9-9-9-9 5.687-9 9z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="text-white font-mulish">
                        <label for="confirm-password" class="block mb-4 text-sm font-medium ">
                            Ingrese Nuevamente Contraseña
                        </label>
                        <div class="relative mb-10">
                            <input type="password" name="confirm-password" id="confirm-password"
                                class="w-full py-2 pr-10 pl-4 text-sm border-[1px] border-solid border-white bg-profile-primary rounded"
                                placeholder="Ingresa otra vez tu contraseña segura"
                                x-bind:type="showConfirmPassword ? 'text' : 'password'">
                            <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 focus:outline-none">
                                <svg x-show="!showConfirmPassword" xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12c0 3.313 6 9 9 9s9-5.687 9-9-6-9-9-9-9 5.687-9 9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12h3m-3 0h-3m0 0H9m0 0H6" />
                                </svg>
                                <svg x-show="showConfirmPassword" xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825a4.002 4.002 0 01-3.75 0M15 12a3 3 0 11-6 0m6 0c.9-1.9 1.575-3 3-4.5M9 12a3 3 0 01-3-3m0 3c-1.575 1.5-2.1 2.6-3 4.5M3 12c0 3.313 6 9 9 9s9-5.687 9-9-6-9-9-9-9 5.687-9 9z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <x-button href="#" bgColor="bg-yellow-primary" textColor="text-primary"
                            beforeColor="yellow-button">
                            Guardar cambios
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
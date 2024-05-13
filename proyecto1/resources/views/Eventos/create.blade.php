<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="py-1 bg-blueGray-50">
    <div class="py-1 my-2 bg-blueGray-50">
        <div class="max-w-md mx-auto">
            <div class="relative rounded-xl overflow-auto mb-2">

                <a
                class=" bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 my-2 rounded mb-1"
                href="{{ route('ruta-eventos') }}"> <- Volver</a></div>


            <div class="justify-items-start my-4">
                <h2 class="font-semibold leading-7 text-indigo-600"> Crear un nuevo evento </h2>
            </div>


            <div>
                <form method="POST" enctype="multipart/form-data" action="{{ route('evento-store') }}">

                    @csrf
                    <div class="relative z-0 w-full mb-5 group">
                        <input
                            required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            type="text"
                            name="nombre"
                            placeholder="Escribe el nombre de tu evento"
                            minlength="6"
                            maxlength="15"
                            ></input>
                    </div>
                    <div>
                        @error('nombre')
                            <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular"
                                role="alert">
                                <span class="font-medium">Campo nombre requerido</span>
                            </div>
                        @enderror
                    </div>


                    <div class="relative z-0 w-full mb-5 group">
                        <textarea
                            required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            name="desc" cols="30" rows="10"
                            minlength="10"
                            maxlength="50"> </textarea>
                        <div>
                            @error('desc')
                                <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular"
                                    role="alert">
                                    <span class="font-medium">Descripción requerida</span>
                                </div>
                            @enderror
                        </div>

                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input
                            required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            name="fecha"
                            type="date"
                            required pattern="\d{4}-\d{2}-\d{2}"
                            min="2024-05-11"
                            placeholder="Escribe el fecha de tu evento"></input>
                    </div>
                    <div>
                        @error('fecha')
                            <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular"
                                role="alert">
                                <span class="font-medium">Campo fecha requerido</span>
                            </div>
                        @enderror
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input
                            required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            type="text"
                            name="lugar"
                            placeholder="Escribe la dirección de tu evento"
                            minlength="15"
                            maxlength="50"></input>
                    </div>
                    <div>
                        @error('lugar')
                            <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular"
                                role="alert">
                                <span class="font-medium">Campo lugar requerido</span>
                            </div>
                        @enderror
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input
                            required
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            type="file" name="foto"></input>
                    </div>


                    <div>
                        @error('foto')
                            <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular"
                                role="alert">
                                <span class="font-medium">Una imagen es requerida</span>
                            </div>
                        @enderror
                    </div>









                    <button
                        class=" bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none mr-1 mb-1"
                        type="submit"> Crear </button>





                </form>
            </div>
        </div>
    </div>

</div>
</div>

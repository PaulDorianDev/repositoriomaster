<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="py-1 bg-blueGray-50">
    <a class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 my-2 mx-2 rounded mr-1 mb-1 ease-linear"
    href="{{ route('eventos') }}"> <- Volver</a>

    <div class="py-1 my-2 bg-blueGray-50">
        <div class="max-w-md mx-auto">
            <div class="text-base font-semibold leading-7 text-indigo-600"> Crear un nuevo evento</div>
                <div>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('evento-store') }}">

                        @csrf
                        <div class="relative z-0 w-full mb-5 group">
                            <input class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text"
                                    name="nombre"
                                    placeholder="Escribe el nombre de tu evento"></input>
                        </div>
                            <div>
                                @error('nombre')
                                <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular" role="alert">
                                    <span class="font-medium">Campo nombre requerido</span>
                                  </div>
                                @enderror
                            </div>


                        <div class="relative z-0 w-full mb-5 group">
                            <textarea class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    name="desc"
                                    cols="30"
                                    rows="10"> </textarea>
                                    <div>
                                        @error('desc')
                                         <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular"  role="alert">
                                             <span class="font-medium">Descripción requerida</span>
                                           </div>
                                         @enderror
                                     </div>

                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <input class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text"
                                    name="fecha"
                                    placeholder="Escribe el fecha de tu evento"></input>
                        </div>
                            <div>
                                @error('fecha')
                                <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular" role="alert">
                                    <span class="font-medium">Campo fecha requerido</span>
                                  </div>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <input class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        type="text"
                                        name="lugar"
                                        placeholder="Escribe la dirección de tu evento"></input>
                            </div>
                                <div>
                                    @error('lugar')
                                    <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular" role="alert">
                                        <span class="font-medium">Campo lugar requerido</span>
                                      </div>
                                    @enderror
                                </div>

                                <div class="relative z-0 w-full mb-5 group">
                                    <input class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            type="file"
                                            name="foto"></input>
                                </div>
                                    <div>
                                        @error('foto')
                                        <div class="relative block p-2 my-4 text-base leading-5 text-white bg-red-500 rounded-lg opacity-100 font-regular" role="alert">
                                            <span class="font-medium">Una imagen es requerida</span>
                                          </div>
                                        @enderror
                                    </div>



                            <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="submit"> Crear </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

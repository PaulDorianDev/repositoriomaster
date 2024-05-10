<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<div class="py-1 bg-blueGray-50">

    <div class="py-1 my-2 bg-blueGray-50">
        <div class="max-w-md mx-auto">
            <div class="text-base font-semibold leading-7 text-indigo-600"> Crear un nuevo post </div>
                <div>
                    <form method="POST" action="{{ route('store') }}">

                        @csrf
                        <div class="relative z-0 w-full mb-5 group">
                            <input class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    type="text"
                                    name="title"
                                    placeholder="Escribe el título de tu post"></input>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <textarea class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    name="body"
                                    cols="30"
                                    rows="10"> </textarea>

                        </div>
                            <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="submit"> Crear </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

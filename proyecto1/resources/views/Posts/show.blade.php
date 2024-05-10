<link
  rel="stylesheet"
  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
/>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>


<div class="py-1 bg-blueGray-50">

    <a class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 my-2 mx-2 rounded mr-1 mb-1 ease-linear"
    href="{{ route('dashboard') }}"> <- Volver</a>

    <div class="max-w-md mx-auto mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">

        <div class="p-6">

            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                {{ $post->title }}
            </h5>

            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                {{ $post->body }}
            </p>
        </div>

        <div>
                <div class="mx-2 my-2">
                    <form  method="GET" action="{{ route('edit', ['post' => $post->id])}}">
                        @csrf
                        <button class="select-none font-sans font-bold text-center uppercase text-xs py-3 px-6 rounded-lg bg-black text-white"
                        type ="submit"> Editar </button>
                    </form>
                </div>
                <div class="mx-2 my-2">
                    <form action="{{ route('delete', ['post' => $post]) }}">
                        @csrf
                        <button class="select-none font-sans font-bold text-center uppercase text-xs py-3 px-6 rounded-lg bg-black text-white"
                        type ="submit"> Eliminar </button>
                        </form>
                </div>

        </div>
    </div>
</div>

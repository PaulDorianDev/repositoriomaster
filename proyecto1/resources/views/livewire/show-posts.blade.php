<div>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">



    <section class="py-1 bg-blueGray-50">
    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
      <td> <a class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="{{ route('ruta-eventos') }}">Eventos</a></td>

      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
            <div class="flex flex-wrap items-center">
             <input class=" mx-10 w-full" type="text" wire:model="search">
            </div>
            <div>
            <a class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="{{ route('create') }}">Crear</a>
            </div>
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            @if($posts->count())


            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
            <table
              class="items-center bg-transparent w-full border-collapse ">
                <thead
                  class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">
                  <tr>
                    <th scope="col" wire:click="order('id')" class=" cursor-pointer px-6 py-4">#</th>
                    <th scope="col" wire:click="order('title')" class=" cursor-pointer px-6 py-4">Título</th>
                    <th scope="col" wire:click="order('body')" class=" cursor-pointer px-6 py-4">Contenido</th>
                    <th scope="col"  class=" cursor-pointer px-6 py-4">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)


                  <tr class="border-b border-neutral-200 dark:border-white/10 px-6">
                    <td> {{ $post->id }}</td>
                    <td> {{ $post->title }}</td>
                    <td> {{ $post->body}}</td>
                    <td> <a class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="{{ route('show', ['post' => $post]) }}">Mostrar</a></td>

                  </tr>
                  @endforeach
                </tbody>
              </table>



              @else

              <p>No hay datos disponibles para mostrar</p>

              @endif
            </div>
        </div>
      </div>

      <div class="block w-full overflow-x-auto">



      </div>
    </div>
  </div>
  </section>

    {{-- The whole world belongs to you. --}}
</div>

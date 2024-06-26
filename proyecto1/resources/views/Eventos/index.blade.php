<div>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">



    <section class="py-1 bg-blueGray-50">
        @if (Session::has('mensaje'))

        <div class="grid justify-items-center bg-indigo-500 text-white">
            <div class="m-2">
                {{ Session::get('mensaje') }}
            </div>
        </div>

        @endif


    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
            <div class="items-center">


             <div class="mt-4">
                <a class="ml-2 bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="{{ route('evento-create') }}">Crear</a>
                </div>

             <input class=" ml-2 mr-4 my-4" type="text" wire:model="search">

            </div>

        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            @if($eventos->count())


            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
            <table
              class="items-center bg-transparent w-full border-collapse ">
                <thead
                  class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 font-semibold">
                  <tr>
                    <th scope="col" wire:click="order('id')" class=" cursor-pointer px-6 py-4">#</th>
                    <th scope="col" wire:click="order('nombre')" class=" cursor-pointer px-6 py-4">Nombre</th>
                    <th scope="col" wire:click="order('desc')" class=" cursor-pointer px-6 py-4">Descripción</th>
                    <th scope="col" wire:click="order('fecha')" class=" cursor-pointer px-6 py-4">Fecha</th>
                    <th scope="col" wire:click="order('lugar')" class=" cursor-pointer px-6 py-4">Lugar</th>
                    <th scope="col" class=" cursor-pointer px-6 py-4">Foto</th>

                    <th scope="col"  class=" cursor-pointer px-6 py-4">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)


                  <tr class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4">
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4" > {{ $evento->id }}</td>
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4"> {{ $evento->nombre }}</td>
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4"> {{ $evento->desc}}</td>
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4"> {{ $evento->fecha}}</td>
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4"> {{ $evento->lugar}}</td>
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4"> {{ $evento->foto}}</td>
                    <td class="border-b border-neutral-200 dark:border-white/10 px-6 mx-4"> <a class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        href="{{ route('evento-mostrar', ['evento' => $evento]) }}">Mostrar</a></td>

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

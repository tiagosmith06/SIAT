<x-app-layout>
    <div class="container my-0 mx-auto md:px-8 py-5 max-w-5xl">

        <div class="mt-20">
            @if ($posts->count() >= 1)

            <h1 class="uppercase text-2xl py-3 text center font-bold">Contenido  relacionados con tu búsqueda...
                :{{$search}}
            </h1>
            <div class="flex flex-col gap-5">

                @foreach ($posts as $post)


                <x-post-filter :post="$post" />
                @endforeach
            </div>
            @else
            <div class="flex justify-center items-center h-[300px]">
                <h2 class="text-4xl font-semibold"> No hay registro de tu búsqueda : {{$search}} </h2>
            </div>
            @endif


        </div>

        <div class="py-5 w-full px-5">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>

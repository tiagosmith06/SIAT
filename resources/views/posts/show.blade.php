<x-app-layout>

    <div class="container my-0 mx-auto md:px-8 py-5 gap-5 max-w-7xl">
        <div class=" max-w-7xl">
            <h1 class="text-4xl font-semibold text-opacity-20"> {{$post->name}}</h1>
            <div class="my-2 flex gap-2">
                <p>Por Administrador:</p>
                <span> {{$post->updated_at->format('d-m-Y ')}}</span>
            </div>

            <div class="text-lg text-black post-detail">
                {!! html_entity_decode($post->extract) !!}

            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 my-8 ">

            <div class="col-span-3 md:col-span-2 ">
                <img class="w-full h-[400px] bg-cover bg-center object-cover"
                    src="@if($post->image){{Storage::url($post->image->url)}} @endif">
                <div class="text-base text-black  post-detail">
                    {!! html_entity_decode($post->body) !!}
                </div>

            </div>

        </div>
    </div>
</x-app-layout>

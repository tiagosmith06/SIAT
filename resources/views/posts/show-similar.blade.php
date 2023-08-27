<x-app-layout>
    <div class="container my-0 mx-auto md:px-8 py-5 gap-5 max-w-7xl">
        <div class=" max-w-7xl">
            <h1 class="text-4xl font-semibold text-opacity-20"> {{$post->id}} {{$post->name}}dd</h1>
            <div class="my-2 flex gap-2">
                <p>Por Administrador:</p>
                <span> {{$post->updated_at->format('d-m-Y ')}} </span>
            </div>

            <div class="text-xl text-red-500 post-detail">
                {!! html_entity_decode($post->extract) !!}

            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 my-8 ">

            {{-- contenido pricipal --}}
            <div class="col-span-3 md:col-span-2 ">
                <img class="w-full h-[400px] bg-cover bg-center object-cover"
                    src="@if($post->image){{Storage::url($post->image->url)}} @endif">
                <div class="text-base text-black text-justify  post-detail">
                    {!! html_entity_decode($post->body) !!}

                </div>

            </div>

            <div class="col-span-3  md:md:col-span-1">
                <h3>Artículos relacionados </h3>

                <div class="flex gap-5 flex-col">

                    @foreach ($similares as $similar)

                    <a href="{{route('posts.show',$similar)}}" class=" flex gap-2">
                        <article class="w-[150px] h-[80px] bg-cover bg-center " class="w-full h-80 bg-cover bg-center"
                            style="background-image: url(@if($similar->image) {{Storage::url($similar->image->url)}} @else 'https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns='
                            @endif)">
                        </article>

                        <div class="w-[80%] h-full  flex flex-col justify-center">
                            <h1 class="text-lg font-bold ">
                                {{$similar->name}}
                            </h1>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>
            
            <div class="flex flex-col w-full col-span-2 my-0 mx-auto">
                @include('comments.show',['list'=> $post->comments,'post'=> $post])
                @include('comments.form')
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="min-h-screen">


        <div class="container py-8 my-0 mx-auto max-w-6xl  ">
            <h1 class="text-2xl font-medium mb-4">Catálogo</h1>


            <div class="flex  flex-col gap-4">

                @foreach ($posts as $post)

                <div
                    class="p-6 text-white border relative border-gray-200 rounded-lg shadow  w-full h-[15rem] flex justify-center items-center flex-col bg-slate-500">
                    <div class=" absolute top-0 left-0  bg-white p-2 rounded-l-md">
                        <i class="fa-regular fa-calendar text-my_green"></i>
                        <span class="text-black ">{{$post->created_at}}</span>
                    </div>

                    <a href="{{route('pages.show-biogeografico',$post)}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  "> {{$post->name}}
                        </h5>
                    </a>
                    <a href="{{route('pages.show-biogeografico',$post)}}" class="mb-3 font-normal ">
                        {!! html_entity_decode(Str::limit($post->extract, 90, '...')) !!}

                    </a>

                </div>
                @endforeach

            </div>
            <div>

                {{$posts->links()}}
            </div>
        </div>
    </div>
</x-app-layout>

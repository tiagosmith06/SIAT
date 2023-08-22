<x-app-layout>
    <div class="min-h-screen">

        <div class="container mt-40 py-4   max-w-6xl  ">
            <h1 class="text-3xl text-center text-amber-300 font-medium mb-4">ÚLTIMAS NOTICIAS</h1>
                <div class="grid m-3 gap-6 lg:grid-cols-3 xl:gap-x-12">

                @foreach ($posts as $post)

                <div class="mb-6 lg:mb-0">
                    <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img class="w-full"
                    src="@if($post->image){{Storage::url($post->image->url)}} @endif">

                    <a href="#!">
                      <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                      </div>
                    </a>
                  </div>


                    <a href="{{route('pages.show-comunicacion',$post)}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  ">
                        </h5>
                        <h5 class="mb-3 text-lg font-bold">{{$post->name}}</h5>

                    </a>

                    <p class="mb-6 text-neutral-500 text-black text-justify text-justify">
                        <small>Publicado <u>{{$post->created_at}}</u> Autor:
                            <a href="{{route('pages.show-comunicacion',$post)}}">{{$post->user->name}}</a></small>
                        </p>

                    <a href="{{route('pages.show-comunicacion',$post)}}" class="text-neutral-500 text-black text-justify text-justify">
                        {!! html_entity_decode(Str::limit($post->extract, 90, '...')) !!}
                    </a>

                </div>
                @endforeach

            </div>
            <div>
                {{$posts->links()}}
            </div>
            </section>
        </div>
    </div>
    <div class="container my-24 mx-auto md:px-6">

        <section class="mb-32 text-center">
          <h2 class="mb-12 text-center text-amber-300 text-3xl font-bold">NOTICIAS ANTIGUAS</h2>
          <div class="grid m-3 gap-6 lg:grid-cols-3 xl:gap-x-12">

            <div class="mb-6 lg:mb-0">
              <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="{{ asset('images/capurgana.jpg') }}" class="w-full" alt="Louvre" />
                <a href="#!">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
                </a>
              </div>

              <div class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-2 h-5 w-5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                </svg>
                Travels
              </div>
              <p class="mb-6 text-neutral-500 text-black text-justify text-justify">
                <small>Publicado  <u>13-08-2023</u> Autor:
                  <a href="#!">Anna Maria Doe</a></small>
              </p>
              <p class="text-neutral-500 text-black text-justify text-justify">
                Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                placerat vulputate. Ut vulputate est non quam dignissim
                elementum. Donec a ullamcorper diam.
              </p>
            </div>

            <div class="mb-6 lg:mb-0">
              <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="{{ asset('images/drom.jpg') }}" class="w-full" alt="Louvre" />
                <a href="#!">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
                </a>
              </div>
              <h5 class="mb-3 text-lg font-bold">LABORATORIO DE DATOS IIAP</h5>
              <div class="mb-3 flex items-center justify-center text-sm font-medium text-primary dark:text-primary-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-2 h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                </svg>
                Art
              </div>
              <p class="mb-6 text-neutral-500 text-black text-justify text-justify">
                <small>Publicado <u>13-08-2023</u> Autor:
                  <a href="#!">Halley Frank</a></small>
              </p>
              <p class="text-neutral-500 text-black text-justify text-justify">
                Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet diam
                orci, nec ornare metus semper sed. Integer volutpat ornare erat
                sit amet rutrum.
              </p>
            </div>

            <div class="mb-0">
                <div>
                <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                  data-te-ripple-init data-te-ripple-color="light">
                  <img src="{{ asset('images/Hidrografia.webp') }}" class="w-full" alt="Louvre" />
                  <a href="#!">
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                    </div>
                  </a>
                </div>

                <h5 class="mb-3 text-lg font-bold">HIDROGRAFIA</h5>
                <div class="mb-3 flex items-center justify-center text-sm font-medium text-yellow-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="mr-2 h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                  </svg>
                  Business
                </div>
                <p class="mb- text-neutral-500 text-black text-justify text-justify">
                  <small>Publicado <u>13-08-2023</u> Autor:
                    <a href="#!">Joe Svan</a></small>
                </p>
                <p class="text-neutral-500 text-black text-justify text-justify">
                  Curabitur tristique, mi a mollis sagittis, metus felis mattis
                  arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                  massa volutpat feugiat. Donec.
                </p>

              </div>
            </div>
          </div>
          <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
            <div class="mb-6 lg:mb-0">
              <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="{{ asset('images/capurgana.jpg') }}" class="w-full" alt="Louvre" />
                <a href="#!">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
                </a>
              </div>

              <h5 class="mb-3 text-lg font-bold">CAPURGANÁ</h5>
              <div class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-2 h-5 w-5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                </svg>
                Travels
              </div>
              <p class="mb-6 text-neutral-500 text-black text-justify text-justify">
                <small>Publicado <u>13-08-2023</u> Autor:
                  <a href="#!">Anna Maria Doe</a></small>
              </p>
              <p class="text-neutral-500 text-black text-justify text-justify">
                Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                placerat vulputate. Ut vulputate est non quam dignissim
                elementum. Donec a ullamcorper diam.
              </p>
            </div>

            <div class="mb-6 lg:mb-0">
              <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="{{ asset('images/drom.jpg') }}" class="w-full" alt="Louvre" />
                <a href="#!">
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
                </a>
              </div>

              <h5 class="mb-3 text-lg font-bold">LABORATORIO DE DATOS IIAP</h5>
              <div class="mb-3 flex items-center justify-center text-sm font-medium text-primary dark:text-primary-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-2 h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                </svg>
                Art
              </div>
              <p class="mb-6 text-neutral-500 text-black text-justify text-justify">
                <small>Publicado <u>13-08-2023</u> Autor:
                  <a href="#!">Halley Frank</a></small>
              </p>
              <p class="text-neutral-500 text-black text-justify text-justify">
                Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet diam
                orci, nec ornare metus semper sed. Integer volutpat ornare erat
                sit amet rutrum.
              </p>
            </div>

            <div class="mb-0 m-3">
                <div>
                <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                  data-te-ripple-init data-te-ripple-color="light">
                  <img src="{{ asset('images/Hidrografia.webp') }}" class="w-full" alt="Louvre" />
                  <a href="#!">
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                    </div>
                  </a>
                </div>

                <h5 class="mb-3 text-lg font-bold">HIDROGRAFIA</h5>
                <div class="mb-3 flex items-center justify-center text-sm font-medium text-yellow-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="mr-2 h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                  </svg>
                  Business
                </div>
                <p class="mb- text-neutral-500 text-black text-justify text-justify">
                  <small>Publicado <u>13-08-2023</u> Autor:
                    <a href="#!">Joe Svan</a></small>
                </p>
                <p class="text-neutral-500 text-black text-justify text-justify">
                  Curabitur tristique, mi a mollis sagittis, metus felis mattis
                  arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                  massa volutpat feugiat. Donec.
                </p>

              </div>
            </div>
          </div>
      </section>





</x-app-layout>

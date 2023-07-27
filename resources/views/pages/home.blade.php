<x-app-layout>

    @include('components/slider-home')

    <div   class=" bg-white max-w-7xl  mx-auto  flex-col flex gap-4 my-5 ">

        <div class="flex gap-5 justify-center flex-wrap items-center">

            <a href='https://cliente.hostgator.co/sitios-web' target="_blank">

                <img src="{{ asset('images/142.png') }}" alt="">

            </a>
            <a href="{{route('pages.contactanos')}}">
                <img src="{{ asset('images/contact.svg') }} " alt="contactanos" class="w-[200px]" alt="">

            </a>
            <a href="{{route('pages.biogeografico')}}">

                <img src="{{ asset('images/programa250.png') }}" alt="">
            </a>
            <a href={{ route('pages.comunicacion') }}>

                <img src="{{ asset('images/noticia250.png') }}" alt="">
            </a>
        </div>


        <!--<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">BIENVENIDOS A SIAT-PC</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">El Sistema de Información Ambiental Territorial del Pacífico Colombiano (SIAT-PC)
                    es el conjunto integrado de actores, políticas, procesos y tecnologías involucradas en la
                    gestión de información ambiental para facilitar la generación de conocimiento, la toma de decisiones, la educación y la participación social, en el pacifico colombiano.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Get started
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Learn more
                    </a>
                </div>

            </div>

        </section>
    -->
<!--
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <div class="relative mb-12 px-3 lg:mb-0">
          <div class="mb-2 flex justify-center">
            <span class="text-primary">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-14 w-14">
                <path
                  d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
              </svg>
            </span>
          </div>
          <h5 class="mb-6 font-bold text-primary">5000+</h5>
          <h6 class="mb-0 font-normal dark:text-neutral-50">Components</h6>
          <div
            class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
        </div>
        <div class="relative mb-12 px-3 lg:mb-0">
          <div class="mb-2 flex justify-center">
            <span class="text-primary">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-14 w-14">
                <path
                  d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z" />
                <path
                  d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z" />
                <path
                  d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z" />
              </svg>
            </span>
          </div>
          <h5 class="mb-6 font-bold text-primary">490+</h5>
          <h6 class="mb-0 font-normal dark:text-neutral-50">Design blocks</h6>
          <div
            class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
        </div>
        <div class="relative mb-12 px-3 lg:mb-0">
          <div class="mb-2 flex justify-center">
            <span class="text-primary">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-14 w-14">
                <path
                  fill-rule="evenodd"
                  d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </div>
          <h5 class="mb-6 font-bold text-primary">100+</h5>
          <h6 class="mb-0 font-normal dark:text-neutral-50">Templates</h6>
          <div
            class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block"></div>
        </div>
        <div class="relative mb-12 px-3 lg:mb-0">
          <div class="mb-2 flex justify-center">
            <span class="text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-14 w-14">
                <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd" />
              </svg>
            </span>
          </div>
          <h5 class="mb-6 font-bold text-primary">28</h5>
          <h6 class="mb-0 font-normal dark:text-neutral-50">Plugins</h6>
        </div>
      </div>

    -->

        <div class="grid grid-cols-1 md:grid-cols-2  justify-between max-w-5xl my-0 mx-auto ">

            <div class="flex  flex-col items-center">

                <p class="text-4xl p-2 text-white rounded-r-full bg-orange-400 text-justify">
                    <strong>BIENVENIDOS A SIAT-PC </strong>
                </p>
<!--                <div>
                    <img class="max-w-[300px]" src="{{ asset('/images/logo.jpeg') }}" alt="">
                </div>
-->
                <p class="bg-green-700 text-2xl text-white m-4 rounded-br-md  text-justify p-10">El Sistema de Información Ambiental Territorial del Pacífico Colombiano (SIAT-PC)
                    es el conjunto integrado de actores, políticas, procesos y tecnologías involucradas en la
                    gestión de información ambiental para facilitar la generación de conocimiento, la toma de decisiones, la educación y la participación social, en el pacifico colombiano.
                </p>
            </div>

            <div class="flex text-right">
                <div class="container mx-auto my-8">
                    <div class="aspect-w-10 aspect-h-9" style="overflow: hidden;">
                        <iframe src="https://www.youtube.com/embed/jdhUpvM9gVo" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

    </div>

    <div class="flex flex-col bg-white">
        <h1 class="t text-center  text-gray-700 text-3xl my-3"><strong>ALIADOS INSTITUCIONALES
        </strong></h1>

        <section class=" grid-cols-1 md:grid-cols-2  max-w-5xl my-0 mx-auto " id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="https://siatac.co/" target="_blank" >
                            <img class="mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-full w-auto" src="{{ asset('images/siataclogo.png') }}" alt="SIAC" /></a>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                           <a href="http://www.siac.gov.co//" target="_blank" >
                            <img class="mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-full w-fit" src="{{ asset('images/siacgov.png') }}" alt="..." /></a>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="https://iiap.org.co/" target="_blank" rel="noopener noreferrer">
                                <img class="mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-full w-auto" src="{{ asset('images/IIAP.png') }}" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="http://humboldt.org.co/es/" target="_blank" rel="noopener noreferrer">
                                <img class="mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-full w-29" src="{{ asset('images/descarga.png') }}" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="https://biodiversidad.co/" target="_blank" rel="noopener noreferrer">
                                <img class="mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-full w-auto" src="{{ asset('images/sib.png') }}" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="" target="_blank" >
                                <img class="mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0  w-28" src="{{ asset('images/invemar.jpeg') }}" alt="..." /></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="flex gap-7 flex-wrap max-w-5xl my-0 mx-auto items-center justify-center">
            <!-- <img src="{{ asset('images/sedchoc.png') }}" calt="" class="rounded-lg">-->
            <!--<img src="{{ asset('images/pacipaz.png') }}" alt="">-->
            <!--<img src="{{ asset('images/onic.png') }}" alt="">-->
            <!--<img src="{{ asset('images/mesapermante.jpg') }}" alt="">-->
        </div>
    </div>

</x-app-layout>

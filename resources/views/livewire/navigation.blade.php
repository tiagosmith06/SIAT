
<header  class=" borde border-b-[1px] border-gray-200 w-full">
    <nav  class="bg-orange-600 fixed top-0 left-0 right-0 z-50 shadow-lg" border-gray-200 px-2 sm:px-2 py-1 rounded text-white w-full">

        <div class="flex flex-wrap m-2 items-center justify-between w-full  p-1">
            <div
                class="container flex flex-wrap items-center justify-between md:justify-center xl:justify-between  ">
                <div class="flex items-center  gap-2">
                    <a href="/" target="_parent" rel="noopener noreferrer" class="flex">
                        <img src=" {{ asset('images/logotipo.jpg') }} " class=" rounded-full  t-left w-[50px]">
                        <div class="flex flex-col text-black">
                    </a>
                </div>

            </div>
            <div class="flex items-center md:order-2 ">
                <div class="relative  md:my-0 md:mx-auto">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                        x-on:click="openMenu=true">
                        <svg class="w-2 h-5 text-black" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>

                    <form action="{{route('posts.search')}}" method="GET" class="d-flex">
                        <input type="text" id="search-navbar" autocomplete="on" name="search"
                            class="block w-full p-2 pl-10 text-lg text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-light_green   dark:placeholder-black " placeholder="Buscar" value="{{request('search')}}">
                    </form>
                </div>

                <button data-collapse-toggle="mega-menu-icons" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-black rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu-icons" aria-expanded="false">
                    <span class="sr-only">Abrir menú</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>

                    </svg>
                </button>
            </div>
            <div class="md:order-3 inline">

                @auth
                <div class="flex items-center order-3 text-black relative" x-data="{open:false}">
                    <button type="button" x-on:click="open=true" id="mega-menu-icons-dropdown-button3" id="mega-menu-icons-dropdown-button3" data-dropdown-toggle="mega-menu-icons-dropdown3"
                        class="flex mr-3 text-sm  rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                        <span class="sr-only">Menú de Usuario</span>
                        <img class="w-8 h-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="user photo">
                    </button>

                    <div
                        id="mega-menu-icons-dropdown3" class="z-50 absolute hidden ">
                        <div aria-labelledby="mega-menu-icons-dropdown-button3"
                            class="z-50 absolute  my-4 text-base list-none bg-orange-600 divide-y divide-gray-100 rounded shadow  top-[-30px] right-[0px]">
                            <div class="px-4 py-3 ">
                                <span class="block text-sm text-white"> {{auth()->user()->name}}</span>
                                <span
                                    class="block text-sm font-medium font-bold text-black truncate text-white">{{auth()->user()->email}}</span>
                            </div>

                            <ul class="py-1">

                                @can('admin.index')
                                <li>

                                    <a href="{{route('admin.index')}}"  class="block px-4 py-2 text-sm text-white rounded-md hover:bg-orange-500 hover:text-blue-950 font-medium">Dashboard</a>
                                </li>
                                @endcan

                                <li>
                                    <a href="{{route('profile.show')}}"
                                        class="block px-4 py-2 text-sm text-white rounded-md hover:bg-orange-500 hover:text-blue-950 font-medium ">Ajuste de cuenta</a>
                                </li>

                                <li>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        {{method_field('post')}}

                                        @csrf

                                        <a href="{{ route('logout') }}"
                                            class="block px-4 py-2 text-sm text-white rounded-md hover:bg-orange-500 hover:text-blue-950 font-medium "
                                            @click.prevent="$root.submit();">Cerrar sesión</a>
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else

                <div class="flex gap-2 order-3 items-center cursor-pointer text-white text-[14px] flex-col">
                    <div>
                        <a href="{{ route('login') }}" class="text-white">Iniciar Sesión</a>
                    </div>
                    <div>
                        <a href="{{ route('register') }}" class="text-white">Registrarse</a>
                    </div>
                </div>


                @endauth
            </div>

            <div id="mega-menu-icons" class=" items-center justify-content hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col  mt-2 font-medium md:flex-row md:space-x-6 md:mt-0">

                    <li>
                        <a href="/"
                            class="block py-2 pl-2 pr-2 text-white
                                 rounded  hover:text-blue-950 md:p-0 {{request()->routeIs('pages.index') ? 'font-bold text-white' : '' }}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{route('pages.quienes_somos')}}"
                            class="{{request()->routeIs('pages.quienes_somos') ? 'font-bold text-white' : '' }} block py-2 pl-2 pr-2  rounded   hover:text-blue-950 md:p-0 hover:font-medium text-white">¿Quienes somos?</a>
                    </li>
                    <li>
                        <a href="{{route('pages.biogeografico')}}"
                            class="{{request()->routeIs('pages.biogeografico') ? 'font-bold text-li' : '' }} block py-2 pl-2 pr-2  rounded   hover:text-blue-950 md:p-0 hover:font-medium text-white">Chocó Biogeográfico</a>
                    </li>

                    <li class="relative">
                        <div id="mega-menu-icons-dropdown-button2" data-dropdown-toggle="mega-menu-icons-dropdown2"
                            class=" py-2 pl-2 pr-2 flex cursor-pointer items-center hover:font-medium  text-white rounded   hover:text-blue-950 md:p-0  ">Servicios
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <div id="mega-menu-icons-dropdown2"
                            class="z-40  font-normal hidden bg-orange-600 divide-y absolute divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm text-white  " aria-labelledby="mega-menu-icons-dropdown-button2">
                                <li>
                                    <a href="{{route('pages.geovisor')}}"
                                        class="block px-4 py-2 hover:bg-orange-500 hover:text-blue-950 rounded-md">
                                        Geovisor
                                    </a>
                                </li>
                                <li>
                                    <a href={{route('pages.catalogo')}}
                                        class="block px-4 py-2 hover:bg-orange-500 hover:text-blue-950 rounded-md">Catálogo
                                    </a>
                                </li>
                                <li>
                                    <a href={{route('pages.dashboard')}}
                                        class="block px-4 py-2 hover:bg-orange-500 hover:text-blue-950 rounded-md">Tableros de Control
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </li>

                <li class="relative">
                    <div id="mega-menu-icons-dropdown-button2" data-dropdown-toggle="mega-menu-icons-dropdown4"
                        class=" py-2 pl-2 pr-2 flex cursor-pointer items-center hover:font-medium  text-white rounded   hover:text-blue-950 md:p-0  ">Atencion integral
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>

                     <div id="mega-menu-icons-dropdown4"
                        class="z-40  font-normal hidden bg-orange-600 divide-y absolute divide-gray-100 rounded shadow w-44 ">
                        <ul class="py-1 text-sm text-white  " aria-labelledby="mega-menu-icons-dropdown-button2">
                            <li>
                                <a href="{{route('pages.gestiondocumental')}}"
                                    class="block px-4 text-center py-2 hover:bg-orange-500 hover:text-blue-950 rounded-md">
                                    Avances
                                </a>
                            </li>
                            <li>
                                <a href={{route('pages.proyectosambientales')}}
                                    class="block px-4 py-2 text-center hover:bg-orange-500 hover:text-blue-950 rounded-md">Proyectos ambientales
                                </a>
                            </li>

                        </ul>
                    </div>

                </li>

                    <li>
                        <a href="{{route('pages.comunicacion')}}"
                            class="{{request()->routeIs('pages.comunicacion') ? 'font-bold text-white' : '' }} block py-2 pl-2 pr-2  rounded   hover:text-blue-950 md:p-0 hover:font-medium text-white">Novedades</a>
                    </li>
                    <li>
                        <a href="{{route('pages.contactanos')}}"
                            class="{{request()->routeIs('pages.contactanos') ? 'font-bold text-white' : '' }} block py-2 pl-2 pr-2  rounded   hover:text-blue-950 md:p-0 hover:font-medium text-white">Contactenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

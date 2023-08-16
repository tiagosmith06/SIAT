<x-app-layout>
    @include('components/slider-home')

    <div class="container my-24 mx-auto md:px-6">


        <section class="mb-32">
          <style>
          .zoom:hover img
            {
              transform: scale(1.1);
            }
          </style>
          <a href="comunicacion">
          <h2 class="mb-12 text-center hover:text-blue-500 t-text-green-500 text-green-500 rounded-full text-3xl font-bold">NOVEDADES</h2>
        </a>
          <div class="grid gap-6 lg:grid-cols-2">
            <div
              class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
              <img src="{{ asset('images/Hidrografia.webp')}}" class="w-full align-middle transition duration-300 ease-linear" />
              <a href="comunicacion">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
                  <div class="flex h-full items-end justify-start">
                    <div class="m-6 text-white">
                      <h5 class="mb-3 text-lg font-bold">I miss the sun</h5>
                      <p>
                        <small
                          >Published <u>13.01.2022</u> by Anna Maria Doe</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
              </a>
            </div>

            <div
              class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
              <img
                src="{{ asset('images/leon.jpg') }}" class="w-full align-middle transition duration-300 ease-linear" />
              <a href="comunicacion">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
                  <div class="flex h-full items-end justify-start">
                    <div class="m-6 text-white">
                      <h5 class="mb-3 text-lg font-bold">
                        Adventure in the desert
                      </h5>
                      <p>
                        <small>Published <u>12.01.2022</u> by Mark Equel</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
              </a>
            </div>

            <div
              class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"  data-te-ripple-init
              data-te-ripple-color="light">
              <img
                src="{{ asset('images/drom.JPG') }}"
                class="w-full align-middle transition duration-300 ease-linear" />
              <a href="comunicacion">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
                  <div class="flex h-full items-end justify-start">
                    <div class="m-6 text-white">
                      <h5 class="mb-3 text-lg font-bold">Lonely mountain</h5>
                      <p>
                        <small
                          >Published <u>10.01.2022</u> by Bilbo baggins</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
              </a>
            </div>

            <div
              class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init
              data-te-ripple-color="light">
              <img
                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/047.jpg"
                class="w-full align-middle transition duration-300 ease-linear" />
              <a href="comunicacion">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.4)] bg-fixed">
                  <div class="flex h-full items-end justify-start">
                    <div class="m-6 text-white">
                      <h5 class="mb-3 text-lg font-bold">Let's go!</h5>
                      <p>
                        <small>Published <u>09.01.2022</u> by Halley Frank</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed transition duration-300 ease-in-out hover:bg-[hsla(0,0%,99%,0.15)]"></div>
              </a>
            </div>



          </div>
        </section>
        <!-- Section: Design Block -->
      </div>
    <div class="flex container bg-white w-full my-14 mx-auto md:px-5">
        <style>
            .hover-scale {
            transform: scale(1);
            transition: transform 0.2s ease-in-out;
            }
            .hover-scale:hover
            {
            transform: scale(1.6);
            }
        </style>
    <section class="mb-32 text-center">
          <h1 class="mb-12 text-green-500 text-3xl font-bold">
            SISTEMA NACIONAL AMBIENTAL
          </h1>

        <div class="lg:gap-xl-12 grid gap-x-3 md:grid-cols-2 lg:grid-cols-3">
            <div class="mb-12 lg:mb-0">
                <a href="https://www.minambiente.gov.co/">
                    <img class="mx-auto hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 mb-6 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[200px]" src="{{ asset('images/minambiente.png') }}" alt="avatar" />
                </a>
              <h2 class="mb-4 text-lg font-bold">MIN. AMBIENTE</h2>
              <p class="mb-6">Ministerio de Ambiente y Desarrollo Sostenible</p>
            </div>

            <div class="mb-12 lg:mb-0">
                <a href="http://www.siac.gov.co//">
                <img class="mx-auto hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 mb-6 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[200px]" src="{{ asset('images/SIAC.png') }}" alt="avatar" />

                <h2 class="mb-4 text-lg font-bold">SIAC</h2>
                <p class="mb-6">Sistema de Información Ambiental de Colombia</p>
                </a>

            </div>
                <div class="mb-12 md:mb-0">
                <a href="https://iiap.org.co/">
                <img class="mx-auto hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 mb-6 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/IIAP.png')}}" alt="avatar" />
                <h2 class="mb-4 text-lg font-bold">IIAP</h2>
                <p class="mb-6">Instituto de Investigación Ambiental del Pacífico</p>
                </a>

                </div>
                <div class="mb-12 md:mb-0">
                    <a href="http://www.ideam.gov.co/">
                <img class="mx-auto hover-scale mb-6 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/ideam.jpg') }}" alt="avatar" />
                <h2 class="mb-4 text-lg font-bold">IDEAM</h2>
                <p class="mb-6">Instituto de Hidrología, Meteorología y Estudios Ambientales</p>
                    </a>

                </div>
                <div class="mb-12 md:mb-0">
                    <a href="https://siatac.co/">
                <img class="mx-auto mb-6 hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/siatac.jpg') }}" alt="avatar" />
                <h2 class="mb-4 text-lg font-bold">SIAT-AC</h2>
                <p class="mb-6">Sistema de Información Ambiental Territorial de la Amazonia Colombiana</p>
                    </a>

                </div>
                <div class="mb-12 md:mb-0">
                    <a href="http://www.humboldt.org.co/es/">
                <img class="mx-auto mb-6 hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/humboldtLogo.png') }}" alt="avatar" />
                <h2 class="mb-4 text-lg font-bold">IDEAM</h2>
                <p class="mb-6">Instituto de Investigación de Recursos Biológicos Alexander von Humboldt</p>
                    </a>
                </div>
          </div>
        </section>      <!-- Section: Design Block -->
</div>
<div class="flex container bg-white w-full my-14 mx-auto md:px-5">
    <style>
        .hover-scale {
        transform: scale(1);
        transition: transform 0.3s ease-in-out;
        }
        .hover-scale:hover
        {
        transform: scale(1.2);
        }
    </style>
<section class="mb-32 text-center">
      <h1 class="mb-12 text-green-500 text-3xl font-bold">
        GOBERNACIONES
      </h1>

    <div class="lg:gap-xl-12 grid gap-x-3 md:grid-cols-3 lg:grid-cols-4">
        <div class="mb-12 lg:mb-0">
            <a href="https://www.choco.gov.co/">
                <img class="mx-auto hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 mb-6 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[200px]" src="{{ asset('images/gobierno_choco.jpeg') }}" alt="avatar" />
            </a>
          <h2 class="mb-4 text-lg font-bold">GOBERNACION DEL CHOCÓ</h2>
          <p class="mb-6"></p>
        </div>

        <div class="mb-12 lg:mb-0">
            <a href="https://antioquia.gov.co/">
            <img class="mx-auto hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 mb-6 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[220px]" src="{{ asset('images/Quia.webp') }}" alt="avatar" />

            <h2 class="mb-4 text-lg font-bold">GOBERNACIÓN DE ANTIOQUIA</h2>
            <p class="mb-6"></p>
            </a>

        </div>
            <div class="mb-12 md:mb-0">
            <a href="https://www.risaralda.gov.co/">
            <img class="mx-auto hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 mb-6 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/risaralda.png')}}" alt="avatar" />
            <h2 class="mb-4 text-lg font-bold">GOBERNACIÓN DE RISARALDA</h2>
            <p class="mb-6"></p>
            </a>

            </div>
            <div class="mb-12 md:mb-0">
                <a href="https://www.valledelcauca.gov.co/">
            <img class="mx-auto hover-scale mb-6 transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/cali.jpg') }}" alt="avatar" />
            <h2 class="mb-4 text-lg font-bold">GOBERNACIÓN DE VALLE DEL CAUCA</h2>
            <p class="mb-6"></p>
                </a>

            </div>
            <div class="mb-12 md:mb-0">
                <a href="http://www.cordoba.gov.co/">
            <img class="mx-auto mb-6 hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/cordoba.jpg') }}" alt="avatar" />
            <h3 class="mb-4 text-lg font-bold">GOBERNACIÓN DE CÓRDOBA</h2>
            <p class="mb-6"></p>
                </a>

            </div>
            <div class="mb-12 md:mb-0">
                <a href="http://www.nariño.gov.co/">
            <img class="mx-auto mb-6 hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/nariño.png') }}" alt="avatar" />
            <h2 class="mb-4 text-lg font-bold">GOBERNACIÓN DE NARIÑO</h2>
            <p class="mb-6"></p>
                </a>
            </div>
            <div class="mb-12 md:mb-0">
                <a href="http://www.cauca.gov.co/">
            <img class="mx-auto mb-6 hover-scale transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg dark:shadow-black/20 h-[150px] w-[190px]" src="{{ asset('images/cauca.jpg') }}" alt="avatar" />
            <h2 class="mb-4 text-lg font-bold">GOBERNACIÓN DE CAUCA</h2>
            <p class="mb-6"></p>
                </a>

            </div>

      </div>
    </section>
</div>

</x-app-layout>

<x-app-layout>



        <div class="flex m-5 p-5 bg-white  items-center justify-between  bg-white-100">

            <div class="flex-1" style="overflow-y: auto;">
                <img src="{{asset('images/Tenencia_ChBio.jpg')}}" alt="Imagen Vertical" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 m-3 p-4">
                <br><br><br><br>
                <h1 class="text-5xl mb-8 text-red-700  font-extrabold mb-4">CHOCÓ BIOGEOGRÁFICO</h1>


            <p class="mb-4 text-base text-black text-center text-neutral-200">
                La región del Pacífico​ es una de las seis regiones naturales de Colombia. Comprende casi la totalidad del departamento del Chocó, y las zonas costeras de los departamentos del Valle del Cauca, Cauca y Nariño.
                Está ubicada en la franja oeste del país, limitando al norte con Panamá, al noreste con la región Caribe, al este con la cordillera Occidental que la separa de la región andina, al sur con Ecuador y al oeste con el océano Pacífico, de donde toma su nombre.
            </p>


            <div  class="bg-orange-600   text-white max-w-screen-xl px-0 py-2 mx-2 text-center lg:py-16 lg:px-6">
                <dl class="grid max-w-screen-md gap-8 mx-auto text-white-900 sm:grid-cols-3 text-white">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-2xl md:text-2xl font-extrabold">7</dt>
                        <dd class="font-light text-white-500 text-white">DEPARTAMENTOS</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-2xl md:text-2xl font-extrabold">7M</dt>
                        <dd class="font-light text-white-500 text-white">POBLACIÓN</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-2xl md:text-2xl font-extrabold">92</dt>
                        <dd class="font-light text-white-500 text-white">MUNICIPIOS</dd>
                    </div>

                </dl>
                <dl class="grid m-4 borde- max-w-screen-md gap-8 mx-auto text-white-900 sm:grid-cols-3 text-white">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-2xl md:text-2xl font-extrabold">233.946 KM²</dt>
                        <dd class="font-light text-white-500 text-white">ÁREA TOTAL</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-2xl md:text-2xl font-extrabold">174</dt>
                        <dd class="font-light text-white-500 text-white">COMUNIDADES</dd>
                    </div>

                    <div class=" m- flex flex-col items-center justify-center">
                        <dt class="mb-2 text-2xl md:text-2xl font-extrabold">232</dt>
                        <dd class="font-light text-white-500 text-white ">RESGUARDOS INDIGENAS</dd>
                    </div>
                </dl>
            </div>

            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <h1 class="text-center text-2xl mb-3  font-bold"> OTROS DATOS ESTADISTICOS</h1>
                <dl class="grid max-w-screen-md gap-8 mx-auto text-white-900 sm:grid-cols-3 dark:text-black">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                        <dd class="font-light text-white-500 text-white">developers</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">1B+</dt>
                        <dd class="font-light text-white-500 text-white">contributors</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">4M+</dt>
                        <dd class="font-light text-white-500 text-white">organizations</dd>
                    </div>
                </dl>

                <dl class="grid max-w-screen-md gap-8 mx-auto text-white-900 sm:grid-cols-3 dark:text-black">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                        <dd class="font-light text-white-500 text-white">developers</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">1B+</dt>
                        <dd class="font-light text-white-500 text-white">contributors</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">4M+</dt>
                        <dd class="font-light text-white-500 text-white">organizations</dd>
                    </div>
                </dl>
                </div>
              </div>

    </div>
    <div id="accordion-collapse" class="m-10 pb-4"  data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
          <button type="button" class="flex bg-orange-600 items-center justify-between w-full p-4 font-medium text-left text-white border border-b-0 border-green-500 rounded-t-xl  focus:ring-green-500 focus:ring-green-500 dark:border-white-700 dark:text-white-400 hover:bg-orange-600 dark:hover:bg-orange-600" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
            <span>MUNICIPIOS</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="container mx-auto p-4">
                <style>
                    /* Estilos para los campos de datos */
                    #dataTable td {
                        background-color: white;
                        border: 2px solid #000000;
                        text-align: center; /* Para centrar el contenido de las celdas */
                        padding: 8px;
                       /* Espaciado interno para un mejor aspecto */
                    }
                    /* Estilos para los encabezados de columna */
                    #dataTable th {
                        border: 1px solid #ccc;
                        text-align: center; /* Para centrar el contenido de los encabezados */
                        padding: 8px; /* Espaciado interno para un mejor aspecto */
                    }
                </style>
                <input type="text" id="searchInput" class="w-full px-4 py-2 mb-4 border border-green-400 rounded-lg" placeholder="Buscar...">

                <div class="flex justify-between mt-4">
                    <div>
                        <label for="showEntries">Mostrar entradas:</label>
                        <select id="showEntries" class="px-2 py-1 border border-gray-300 rounded-md">
                            <option value="15">15</option>
                            <option value="25" selected>25</option>
                            <option value="50">50</option>

                        </select>
                    </div>
                    <div id="paginationInfo" class="text-black"></div>
                    <div class="flex items-center">
                    <button id="prevPageBtn" class="bg-blue-500  hover:bg-orange-600 text-white mr-2 px-3 py-1 border border-gray-400 rounded-md text-white">Anterior</button>
                    <div id="paginationInfo" class="text-black"></div>
                    <button id="nextPageBtn" class="bg-blue-500 hover:bg-orange-600 text-white ml-2 px-3 py-1 border border-gray-400 rounded-md text-white">Siguiente</button>
                </div>
                </div>

            </div>
                <table id="dataTable" class="w-full">
                    <thead>
                        <tr class="bg-blue-500 text-white" >
                            <th class="border px-4 py-2 text-center">CODIGÓ DE DEPARTAMENTOS</th>
                            <th class="border px-4 py-2 text-center">DEPARTAMENTOS</th>
                            <th class="border px-4 py-2 text-center">CÓDIGO DE MUNICIPIOS</th>
                            <th class="border px-4 py-2 text-center">MUNICIPIOS</th>
                            <th class="border px-4 py-2 text-center">ÁREA (ha)</th>
                            <th class="border px-4 py-2 text-center">ALTITUD (msnm)</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

           <script>
                        // Datos de ejemplo para la tabla
                const datosEjemplo = [
                ["5", "Antioquia", "5847", "Urrao", "256.384,97", "2000"],
                ["5", "Antioquia", "5004", "Abriaquí", "29.697,42", "1900"],
                ["5", "Antioquia", "5873", "Vigía Del Fuerte", "166.272,99", "7"],
                ["5", "Antioquia", "5284", "Frontino", "138.445,60", "1500"],
                ["5", "Antioquia", "5138", "Cañasgordas", "36.483,86", "1298"],
                ["5", "Antioquia", "5842", "Uramita", "26.593,70", "647"],
                ["5", "Antioquia", "5475", "Murindó", "126.683,99", "25"],
                ["5", "Antioquia", "5234", "Dabeiba", "195.766,95", "412"],
                ["5", "Antioquia", "5480", "Mutatá", "107.526,59", "132"],
                ["5", "Antioquia", "5361", "Ituango", "82.328,76", "1750"],
                ["5", "Antioquia", "5172", "Chigorodó", "72.198,17", "31"],
                ["5", "Antioquia", "5147", "Carepa", "38.743,53", "34"],
                ["5", "Antioquia", "5045", "Apartadó", "53.536,47", "28"],
                ["5", "Antioquia", "5837", "Turbo", "288.633,76", "1"],
                ["5", "Antioquia", "5665", "San Pedro De Urabá", "15.259,79", "434"],
                ["5", "Antioquia", "5490", "Necoclí", "105.912,83", "6"],
                ["19", "Cauca", "19050", "Argelia", "77.645,55", "1750"],
                ["19", "Cauca", "19318", "Guapi", "257.088,67", "4"],
                ["19", "Cauca", "19256", "El Tambo", "160.323,43", "1750"],
                ["19", "Cauca", "19809", "Timbiquí", "205.978,55", "10"],
                ["19", "Cauca", "19418", "López", "337.042,70", "390"],
                ["27", "Chocó", "27250", "El Litoral Del San Juán", "413.615,27", "25"],
                ["27", "Chocó", "27745", "Sipí", "157.745,31", "50"],
                ["27", "Chocó", "27491", "Nóvita", "94.567,60", "100"],
                ["27", "Chocó", "27450", "Medio San Juan", "66.377,40", "41"],
                ["27", "Chocó", "27660", "San José Del Palmar", "158.252,44", "2500"],
                ["27", "Chocó", "27205", "Condoto", "46.788,64", "50"],
                ["27", "Chocó", "27580", "Rio Iró", "32.521,63", "158"],
                ["27", "Chocó", "27361", "Istmina", "188.108,17", "47"],
                ["27", "Chocó", "27430", "Medio Baudó", "137.294,30", "50"],
                ["27", "Chocó", "27810", "Unión Panamericana", "17.783,77", "94"],
                ["27", "Chocó", "27787", "Tadó", "71.499,59", "78"],
                ["27", "Chocó", "27160", "Cértegui", "42.351,40", "54"],
                ["27", "Chocó", "27135", "El Cantón Del San Pablo", "38.069,33", "35"],
                ["27", "Chocó", "27077", "Bajo Baudó", "348.219,82", "5"],
                ["27", "Chocó", "27073", "Bagadó", "80.756,87", "200"],
                ["27", "Chocó", "27600", "Rio Quito", "69.936,31", "35"],
                ["27", "Chocó", "27050", "Atrato (Yuto)", "42.173,94", "55"],
                ["27", "Chocó", "27413", "Lloró", "84.312,26", "100"],
                ["27", "Chocó", "27495", "Nuquí", "70.458,34", "5"],
                ["27", "Chocó", "27245", "El Carmen", "83.029,38", "1726"],
                ["27", "Chocó", "27025", "Alto Baudó", "205.187,79", "50"],
                ["27", "Chocó", "27425", "Medio Atrato", "181.374,92", "25"],
                ["27", "Chocó", "27001", "Quibdó", "350.865,59", "32"],
                ["27", "Chocó", "27075", "Bahía Solano", "89.606,57", "34"],
                ["27", "Chocó", "27099", "Bojayá", "363.317,81", "13"],
                ["27", "Chocó", "27150", "Carmen Del Darién", "318.268,75", "5"],
                ["27", "Chocó", "27372", "Juradó", "129.805,37", "5"],
                ["27", "Chocó", "27615", "Riosucio", "761.545,64", "22"],
                ["27", "Chocó", "27800", "Unguía", "119.123,07", "50"],
                ["27", "Chocó", "27006", "Acandí", "79.852,83", "6"],
                ["23", "Córdoba", "23807", "Tierralta", "390.190,39", "51"],
                ["23", "Córdoba", "23855", "Valencia", "34.051,70", "55"],
                ["52", "Narño", "52227", "Cumbal", "66.464,38", "3100"],
                ["52", "Narño", "52720", "Sapuyes", "1.185,70", "3014"],
                ["52", "Narño", "52435", "Mallama", "56.981,37", "1809"],
                ["52", "Narño", "52699", "Santa Cruz", "43.458,27", "2500"],
                ["52", "Narño", "52612", "Ricaurte", "105.643,72", "1181"],
                ["52", "Narño", "52678", "Samaniego", "44.291,61", "1450"],
                ["52", "Narño", "52385", "La Llanada", "20.504,73", "2300"],
                ["52", "Narño", "52079", "Barbacoas", "273.590,40", "24"],
                ["52", "Narño", "52418", "Los Andes", "83.301,29", "1550"],
                ["52", "Narño", "52540", "Policarpa", "34.445,16", "1000"],
                ["52", "Narño", "52233", "Cumbitara", "35.555,10", "1675"],
                ["52", "Narño", "52256", "El Rosario", "36.674,36", "1500"],
                ["52", "Narño", "52835", "Tumaco", "361.036,62", "3"],
                ["52", "Narño", "52427", "Magüí", "181.061,07", "23"],
                ["52", "Narño", "52405", "Leiva", "10.078,76", "1500"],
                ["52", "Narño", "52621", "Roberto Payán", "146.003,85", "69"],
                ["52", "Narño", "52520", "Francisco Pizarro", "52.608,28", "1"],
                ["52", "Narño", "52473", "Mosquera", "76.930,85", "8"],
                ["52", "Narño", "52490", "Olaya Herrera", "100.466,72", "1"],
                ["52", "Narño", "52696", "Santa Bárbara", "122.612,58", "2"],
                ["52", "Narño", "52390", "La Tola", "41.653,21", "5"],
                ["52", "Narño", "52250", "El Charco", "249.369,84", "2"],
                ["66", "Risaralda", "66572", "Pueblo Rico", "61.380,27", "1563"],
                ["66", "Risaralda", "66456", "Mistrató", "47.465,90", "1501"],
                ["76", "Valle del cauca", "76869", "Vijes", "6.645,89", "900"],
                ["76", "Valle del cauca", "76377", "La Cumbre", "25.555,01", "1584"],
                ["76", "Valle del cauca", "76606", "Restrepo", "13.724,34", "1400"],
                ["76", "Valle del cauca", "76233", "Dagua", "91.707,28", "827"],
                ["76", "Valle del cauca", "76126", "Calima", "79.384,59", "1500"],
                ["76", "Valle del cauca", "76109", "Buenaventura", "629.593,50", "6"],
                ["76", "Valle del cauca", "76828", "Trujillo", "4.817,04", "1308"],
                ["76", "Valle del cauca", "76100", "Bolívar", "61.407,94", "930"],
                ["76", "Valle del cauca", "76622", "Roldanillo", "8.110,82", "945"],
                ["76", "Valle del cauca", "76400", "La Unión", "842,60", "963"],
                ["76", "Valle del cauca", "76250", "El Dovio", "23.602,93", "1250"],
                ["76", "Valle del cauca", "76863", "Versalles", "20.063,76", "1900"],
                ["76", "Valle del cauca", "76054", "Argelia", "9.080,60", "1512"],
                ["76", "Valle del cauca", "76246", "El Cairo", "21.423,70", "1800"],
                ["76", "Valle del cauca", "76890", "Yotoco", "3.792,43", "850"]

                ];

                const tabla = document.getElementById('dataTable');
                const searchInput = document.getElementById('searchInput');
                const showEntriesSelect = document.getElementById('showEntries');
                const prevPageBtn = document.getElementById('prevPageBtn');
                const nextPageBtn = document.getElementById('nextPageBtn');
                const paginationInfo = document.getElementById('paginationInfo');
                let registrosPorPagina = parseInt(showEntriesSelect.value);
                let paginaActual = 1;
                let sortColumnIndex = -1; // Columna de orden inicial
                let sortDirection = 1; // 1 para ascendente, -1 para descendente

                function mostrarTabla(registros) {
                    const totalPaginas = Math.ceil(registros.length / registrosPorPagina);
                    const inicio = (paginaActual - 1) * registrosPorPagina;
                    const fin = inicio + registrosPorPagina;

                    // Limpia la tabla
                    tabla.querySelector('tbody').innerHTML = '';

                    // Ordenar los registros en función de la columna seleccionada
                    if (sortColumnIndex >= 0) {
                        registros.sort((a, b) => {
                            return a[sortColumnIndex].localeCompare(b[sortColumnIndex]) * sortDirection;
                        });
                    }

                    for (let i = inicio; i < fin; i++) {
                        if (i >= registros.length) break;

                        let tr = document.createElement('tr');
                        for (let j = 0; j < registros[i].length; j++) {
                            let td = document.createElement('td');
                            td.textContent = registros[i][j];
                            tr.appendChild(td);
                        }
                        tabla.querySelector('tbody').appendChild(tr);
                    }

                    paginationInfo.textContent = `Mostrando ${inicio + 1} a ${Math.min(fin, registros.length)} de ${registros.length} entradas`;
                }

                function filtrarRegistros() {
                    const filtro = searchInput.value.toLowerCase();
                    const registrosFiltrados = datosEjemplo.filter(registro => {
                        return registro.some(dato => dato.toLowerCase().includes(filtro));
                    });

                    mostrarTabla(registrosFiltrados);
                }

                function cambiarShowEntries() {
                    registrosPorPagina = parseInt(showEntriesSelect.value);
                    mostrarTabla(datosEjemplo);
                }

                function goToPrevPage() {
                    if (paginaActual > 1) {
                        paginaActual--;
                        mostrarTabla(datosEjemplo);
                    }
                }

                function goToNextPage() {
                    const totalPaginas = Math.ceil(datosEjemplo.length / registrosPorPagina);
                    if (paginaActual < totalPaginas) {
                        paginaActual++;
                        mostrarTabla(datosEjemplo);
                    }
                }

                function handleColumnSort(event) {
                    const columnIndex = event.target.getAttribute('data-sort');

                    if (columnIndex === sortColumnIndex.toString()) {
                        // Cambiar la dirección de orden
                        sortDirection *= -1;
                    } else {
                        // Ordenar por la columna seleccionada de forma ascendente
                        sortColumnIndex = parseInt(columnIndex);
                        sortDirection = 1;
                    }

                    mostrarTabla(datosEjemplo);
                }

                showEntriesSelect.addEventListener('change', cambiarShowEntries);
                searchInput.addEventListener('input', filtrarRegistros);
                prevPageBtn.addEventListener('click', goToPrevPage);
                nextPageBtn.addEventListener('click', goToNextPage);

                // Escuchar eventos de clic en los encabezados de columna para ordenar
                const columnHeaders = document.querySelectorAll('#dataTable th.cursor-pointer');
                columnHeaders.forEach(header => header.addEventListener('click', handleColumnSort));

                // Mostrar la tabla inicialmente
                mostrarTabla(datosEjemplo);
            </script>
        </div>


        <h2 id="accordion-collapse-heading-2">
          <button type="button" class="flex bg-orange-600 items-center justify-between w-full p-4 font-medium text-left text-white border border-b-0 border-green-500  focus:ring-green-500 dark:focus:ring-green-500 dark:border-green-500 dark:text-white-400 hover:bg-orange-600 dark:hover:bg-orange-600" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
            <span>COMUNIDADES NEGRAS</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
          </button>

        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
          <div class="p-5 border border-b-0 border-white-200 dark:border-white-700">



    <div class="container mx-auto p-4">
        <style>
            /* Estilos para los campos de datos */
            #customDataTable2 td {
                background-color: white;
                border: 2px solid #000000;
                text-align: center; /* Para centrar el contenido de las celdas */
                padding: 8px;
               /* Espaciado interno para un mejor aspecto */
            }
            /* Estilos para los encabezados de columna */
            #customDataTable2 th {
                border: 1px solid #ccc;
                text-align: center; /* Para centrar el contenido de los encabezados */
                padding: 8px; /* Espaciado interno para un mejor aspecto */
            }
        </style>
        <input type="text" id="customSearchInput2" class="w-full px-4 py-2 mb-4 border border-blue-500 rounded-md focus:outline-none focus:border-blue" placeholder="Buscar...">
        <div class="flex justify-between items-center mt-4">
            <div>
                <label for="customShowEntries2" class="text-gray mb-4">Mostrar registros:</label>
                <select id="customShowEntries2" class="px-2 py-1 mb-4 border border-blue-500 rounded-md">
                    <option value="15">15</option>
                    <option value="25" selected>25</option>
                    <option value="50">15</option>
                </select>
            </div>
            <div class="flex items-center">
                <button id="customPrevPageBtn2" class="mr-2 mb-3 px-4 py-2 bg-blue-500 hover:bg-orange-600 text-white rounded-md">Anterior</button>
                <div id="customPaginationInfo2" class="text-black"></div>
                <button id="customNextPageBtn2" class="ml-2 mb-3 px-4 py-2 bg-blue-500 hover:bg-orange-600 text-white rounded-md">Siguiente</button>
            </div>
        </div>
        <table id="customDataTable2" class="w-full bg-white rounded-lg shadow-lg">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="border px-4 py-2 cursor-pointer" data-sort="0">NOMBRE DE COMUNIDAD</th>
                    <th class="border px-4 py-2 cursor-pointer" data-sort="1">RESOLUCIÓN</th>
                    <th class="border px-4 py-2 cursor-pointer" data-sort="2">ÁREA TITULADA</th>
                    <th class="border px-4 py-2 cursor-pointer" data-sort="3">AÑO</th>
                    <th class="border px-4 py-2 cursor-pointer" data-sort="4">ÁREA GEOGRÁFICA (ha)</th>

                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>

    </div>

    <script>
        // Datos de ejemplo para la tabla
        let customDatosEjemplo2 = [
            ["DOS BOCAS", "RESOLUCION 0288 DEL 13-dic-1996", "8734,83", "1996", "9624,574043"],
            ["TURRIQUITADÓ", "RESOLUCION 2799 DEL 22-nov-2000", "9406,858", "2000", "9288,764757"],
            ["BELLAVISTA", "RESOLUCION 3235 DEL 15-nov-2007", "284,7361", "2007", "283,69619"],
            ["CÓRDOBA Y SAN CIPRIANO", "RESOLUCION 2456 DEL 4-dic-2005", "7322,9019", "2005", "7295,532479"],
            ["SAN JOAQUIN AGUA DULCE", "RESOLUCION 0080 DEL 10-ago-2016", "2248,5499", "2016", "2256,407416"],
            ["GUAYABAL", "RESOLUCION 0051 DEL 21-jul-2003", "2771,0768", "2003", "2768,565248"],
            ["EL BIEN DEL FUTURO", "RESOLUCION 13610 DEL 12-diC-2014", "4231", "2014", "4225,418189"],
            ["PUERTO ECHEVERRY", "RESOLUCION 1218 DEL 1-jun-2000", "4346,7572", "2000", "4337,00245"],
            ["AGRICULTORES DEL PATÍA GRANDE", "RESOLUCION 1123 DEL 23-may-2000", "31467,4", "2000", "31853,72773"],
            ["UNIÓN RÍO ROSARÍO", "RESOLUCION 2546 DEL 23-dic-2002", "10647,9204", "2002", "11063,5823"],
            ["EL PLAYÓN DEL RÍO SIGUÍ", "RESOLUCION 1645 DEL 6-oct-2004", "45990,9506", "2004", "46268,91756"],
            ["LA CUENCA DEL RÍO SAN BERNARDO PATÍA NORTE", "RESOLUCION 2064 DEL 18-nov-2002", "25652,3907", "2002", "24702,75865"],
            ["PRO-DEFENSA DEL RÍO TAPAJE", "RESOLUCION 1500 DEL 1-ago-2005", "149994,9081", "2005", "153122,1691"],
            ["LA NUPA DEL RÍO CAUNAPÍ", "RESOLUCION 2545 DEL 23-dic-2002", "183,6", "2002", "176,877338"],
            ["UNIÓN DE CUENCAS DE ISAGUALPI", "RESOLUCION 2699 DEL 21-dic-2001", "34268,0037", "2001", "35345,14527"],
            ["ALTO ANCHICAYA", "RESOLUCION 2735 DEL 24-oct-2011", "416,7701", "2011", "416,588028"],
            ["MAYOR DE NÓVITA", "RESOLUCION 2693 DEL 21-dic-2001", "117647,4927", "2001", "117628,725"],
            ["RESCATE LAS VARAS", "RESOLUCION 2786 DEL 13-dic-2006", "14674,6438", "2006", "13677,60325"],
            ["BOCAS DE ATRATO Y LEONCITO", "RESOLUCION 1126 DEL 23-may-2000", "34366,8", "2000", "34443,73208"],
            ["LA GRAN UNION DEL RIO TELPI", "RESOLUCION 02804 DEL 13-dic-2012", "7389,7464", "2012", "7432,900298"],
            ["RÍO BAUDÓ ACABA", "RESOLUCION 1152 DEL 23-may-2001", "174253,1434", "2001", "175629,2024"],
            ["UNIÓN PATÍA VIEJO", "RESOLUCION 4915 DEL 29-dic-1998", "41197", "1998", "41674,94509"],
            ["PARTE BAJA DEL RÍO SAIJA", "RESOLUCION 2245 DEL 4-dic-2002", "16115,9229", "2002", "16680,72298"],
            ["NEGROS EN ACCIÓN", "RESOLUCION 2203 DEL 3-dic-2002", "14362,8095", "2002", "14580,39289"],
            ["LOS RÍOS LA LARGA Y TUMARADÓ", "RESOLUCION 2805 DEL 22-nov-2000", "107064,176", "2000", "110501,509"],
            ["LA CORDILLERA OCCIDENTAL DE NARIÑO COPDICONC", "RESOLUCION 0402 DEL 28-abr-2003", "136265,3152", "2003", "146707,7551"],
            ["RÍO SAN FRANCISCO", "RESOLUCION 1081 DEL 29-abr-1998", "26232,48", "1998", "26863,12564"],
            ["MANOS AMIGAS DEL PATÍA GRANDE", "RESOLUCION 1130 DEL 23-may-2000", "66562", "2000", "67358,00515"],
            ["CONCEJO COMUNITARIO LA BARRA", "RESOLUCION 03534 DEL 06-jul-2015", "3098", "2015", "3111,296792"],
            ["RÍO RAPOSO", "RESOLUCION 3304 DEL 29-dic-1999", "20536", "1999", "19801,69913"],
            ["BAJO POTEDÓ", "RESOLUCION 1086 DEL 29-abr-1998", "1473,17", "1998", "2109,467823"],
            ["PEDEGUITA Y MANCILLA", "RESOLUCION 2804 DEL 22-nov-2000", "48971,585", "2000", "49773,45808"],
            ["LA NUEVA ESPERANZA", "RESOLUCION 02799 DEL 13-dic-2012", "1765,3468", "2012", "14997,45688"],
            ["ACADESÁN", "RESOLUCION 2702 DEL 21-dic-2001", "683591,3753", "2001", "673724,5732"],
            ["EL PROGRESO DEL RÍO NERETE", "RESOLUCION 0404 DEL 28-abr-2003", "10351,3516", "2003", "10543,23418"],
            ["CATANGUEROS", "RESOLUCION 2202 DEL 3-dic-2002", "21064,9273", "2002", "21696,39826"],
            ["EL PROGRESO DEL CAMPO", "RESOLUCION 1124 DEL 23-may-2000", "9174,5426", "2000", "9288,391568"],
            ["BELLAVISTA DUBAZA", "RESOLUCION 1219 DEL 1-jun-2000", "2515,1385", "2000", "2547,919919"],
            ["LA GRANDE", "RESOLUCION 2806 DEL 22-nov-2000", "13455,5254", "2000", "13219,46902"],
            ["GUAPÍ ABAJO", "RESOLUCION 1121 DEL 16-may-2001", "43196,8066", "2001", "45584,31096"],
            ["CUPICA", "RESOLUCION 2700 DEL 21-dic-2001", "39003,8277", "2001", "39402,5625"],
            ["ZACARIAS RÍO DAGUA", "RESOLUCION 0403 DEL 28-abr-2003", "1418,7517", "2003", "1456,096687"],
            ["GAMBOA", "RESOLUCION 1410 DEL 25-may-2010", "2964 Has+8083m²", "2010", "3072,053632"],
            ["CÉRTEGUI", "RESOLUCION 2728 DEL 27-dic-2001", "25275,0014", "2001", "25585,17791"],
            ["NUEVA ALIANZA", "RESOLUCION 03459 DEL 10-dic-2007", "11267,5709", "2007", "11261,38136"],
            ["AGUA CLARA", "RESOLUCION 1173 DEL 16-jul-2002", "12909,7256", "2002", "12968,84875"],
            ["CALLE LARGA RÍO DAGUA", "RESOLUCION 0405 DEL 28-abr-2003", "1599,7225", "2003", "1620,272175"],
            ["MALAGUITA BAJO SAN JUAN", "RESOLUCION 2792 DEL 13-dic-2006", "19,555", "2006", "19,77885"],
            ["PAIMADÓ", "RESOLUCION 2724 DEL 27-dic-2001", "17264,2898", "2001", "17300,20022"],
            ["PIEDRAS BACHICHI", "RESOLUCION 03234 DEL 15-nov-2007", "15,1094", "2007", "16,295967"],
            ["RENACER TELEMBI", "RESOLUCION 1365 12-Mar-2014", "60000", "2014", "7221,940825"],
            ["MAYOR DE LA CUENCA MEDIA Y ALTA DEL RÍO DAGUA", "RESOLUCION 2455 DEL 4-dic-2005", "7375,5678", "2005", "9332,15784"],
            ["VILLA MARÍA DE PURRICHÁ", "RESOLUCION 1129 DEL 23-may-2000", "24411,045", "2000", "23672,65596"],
            ["BRAZITOS Y AMAZONAS", "RESOLUCION 1175 DEL 16-jul-2002", "4029,4503", "2002", "4031,952849"],
            ["TABLÓN SALADO", "RESOLUCION 2539 DEL 23-dic-2002", "3114,8997", "2002", "3031,451393"],
            ["CABECERAS RÍO SAN JUAN", "RESOLUCION 2791 DEL 13-dic-2006", "78,5069", "2006", "52,182131"],
            ["RÍO CURVARADÓ", "RESOLUCION 2809 DEL 22-nov-2000", "46084,005", "2000", "47192,12702"],
            ["MANATÍES", "RESOLUCION 1127 DEL 23-may-2000", "4397,2695", "2000", "4378,90131"],
            ["UNICOSTA", "RESOLUCION 0158 DEL 9-feb-1998", "25380", "1998", "15812,53935"],
            ["MAYOR DEL MUNICIPIO DE CONDOTO E IRÓ", "RESOLUCION 1177 DEL 16-jul-2002", "87803,0167", "2002", "86029,36162"],
            ["GENERAL DE LA COSTA PACÍFICA DEL NORTE - LOS DELFINES", "RESOLUCION 2200 DEL 3-dic-2002", "67327,4967", "2002", "73158,9671"],
            ["RÍO MONTAÑO", "RESOLUCION 2807 DEL 22-nov-2000", "25005,539", "2000", "24895,77324"],
            ["MAYOR DEL CANTÓN SAN PABLO \"ACISANP\"", "RESOLUCION 2694 DEL 21-dic-2001", "36667,4807", "2001", "36740,3416"],
            ["UNION RIO CAUNAPI", "RESOLUCION 8403 Del 01-Sept- 2014", "8877", "2014", "8944,395719"],
            ["SAN MARCOS", "RESOLUCION 2066 DEL 18-nov-2002", "3607,3262", "2002", "3714,047681"],
            ["BOCAS DE TAPARAL", "RESOLUCION 0287 DEL 13-dic-1996", "9494,1675", "1996", "9409,502274"],
            ["TAPARAL", "RESOLUCION 1084 DEL 29-abr-1998", "1777,340262731*", "1998", "1722,609106"],
            ["APARTADÓ BUENAVISTA", "RESOLUCION 0159 DEL 9-feb-1998", "19153,84", "1998", "18903,8581"],
            ["VIRUDÓ", "RESOLUCION 2698 DEL 21-dic-2001", "6868,5536", "2001", "7071,296734"],
            ["LA GRAN MINGA DE LOS RÍOS INGUAMBÍ Y ALBÍ", "RESOLUCION 2793 DEL 13-dic-2006", "2257,9195", "2006", "2939,298455"],
            ["CAMPO HERMOSO", "RESOLUCION 1179 DEL 12-may-1998", "1138,3012", "1998", "1217,485479"],
            ["SAN JOC PARTE ALTA DEL RÍO MICAY", "RESOLUCION 1646 DEL 6-oct-2004", "14560,679", "2004", "13835,35744"],
            ["TRUANDÓ MEDIO", "RESOLUCION 3366 DEL 21-dic-2000", "35992,0518", "2000", "35834,63069"],
            ["IMBILPÍ DEL CARMEN", "RESOLUCION 2544 DEL 23-dic-2002", "2783,3182", "2002", "2766,811341"],
            ["BAHÍA MÁLAGA -LA PLATA", "RESOLUCION 0047 DEL 21-jul-2003 / 2812 del 13-dic2", "38384", "2003 / 2012", "38132,8117"],
            ["LA AMISTAD", "RESOLUCION 2800 DEL 22-nov-2000", "17655", "2000", "18829,13085"],
            ["CHICAO", "RESOLUCION 0285 DEL 13-dic-1996", "18026,1", "1996", "15986,08066"],
            ["MAYOR DEL BAJO ATRATO", "RESOLUCION 0048 DEL 21-jul-2003", "34736,0501", "2003", "33728,17748"],
            ["TABLÓN DULCE", "RESOLUCION 1021 DEL 31-may-2005", "998,7661", "2005", "1111,113093"],
            ["C.C. BRISAS DEL ALTO TELEMBI", "RESOLUCION 14159 DEL 23-dic-2014", "78936", "2014", "79034,40617"],
            ["EL CUERVAL", "RESOLUCION 2722 DEL 27-dic-2001", "5397,3945", "2001", "5622,882353"],
            ["UNIÓN BAJO RÍO GUELMAMBÍ", "RESOLUCION 1648 DEL 6-oct-2004", "9368,2136", "2004", "9486,004928"],
            ["DE ALTO RIO DAGUA", "RESOLUCION 2455 DEL 4-dic-2005", "7375,5678", "2005", "2999,541331"],
            ["GUALMAR", "RESOLUCION 0399 DEL 28-abr-2003", "5787,731", "2003", "5566,958299"],
            ["VEREDAS UNIDAS", "RESOLUCION 2534 DEL 24-nov-1999", "13170", "1999", "12643,2581"],
            ["CITRONELA RÍO DAGUA", "RESOLUCION 0398 DEL 28-abr-2003", "1303,9046", "2003", "1294,333088"],
            ["PARTE ALTA SUR DEL RÍO SAIJA", "RESOLUCION 2204 DEL 3-dic-2002", "19926,5917", "2002", "20449,72016"],
            ["CASIMIRO", "RESOLUCION 2429 DEL 1-dic-2005", "31,6447", "2005", "30,601587"],
            ["MAYOR DE UNIÓN PANAMERICANA", "RESOLUCION 2723 DEL 27-dic-2001", "15123,5729", "2001", "15490,18743"],
            ["LA ESPERANZA DEL RÍO LA TOLA", "RESOLUCION 2537 DEL 23-dic-2002", "3616,082", "2002", "3471,682068"],
            ["CONSEJO COMUNITARIO INTEGRAL DE LLORO", "RESOLUCION 2919 DEL 21-dic-2012", "194.259.250", "2012", "19605,144"],
            ["LA BREA", "RESOLUCION 0493 DEL 10-abr-2002", "1489,3194", "2002", "1494,115408"],
            ["GUAIMÍA", "RESOLUCION 2198 DEL 3-dic-2002", "1424,4398", "2002", "1560,255704"],
            ["LA VOZ DE LOS NEGROS", "RESOLUCION 2789 DEL 13-dic-2006", "21238,8287", "2006", "22046,86882"],
            ["EL RECUERDO DE NUESTROS ANCESTROS DEL RÍO MEJICANO", "RESOLUCION 0400 DEL 28-abr-2003", "13462,8056", "2003", "14341,72704"],
            ["LA COSTA - CONCOSTA", "RESOLUCION 1123 DEL 16-may-2001", "73033,6039", "2001", "69558,04455"],
            ["MAYORQUÍN Y PAPAYAL", "RESOLUCION 2535 DEL 24-nov-1999", "19060", "1999", "18216,14613"],
            ["BAZAN - LA BOCANA", "RESOLUCION 0664 DEL 7-abr-2005", "9697,5903", "2005", "9452,100286"],
            ["PAVASA", "RESOLUCION 2695 DEL 21-dic-2001", "7435,9691", "2001", "7586,39986"],
            ["ODEMAP MOSQUERA SUR", "RESOLUCION 1022 DEL 31-may-2005", "18790,636", "2005", "18663,27457"],
            ["ISTMINA Y PARTE DEL MEDIO SAN JUAN", "RESOLUCION 1176 DEL 16-jul-2002", "42028,7104", "2002", "45259,88565"],
            ["ALTO MIRA Y FRONTERA", "RESOLUCION 0525 DEL 2-mar-2006", "24790,4537", "2006", "25408,04372"],
            ["SIVIRÚ", "RESOLUCION 1144 DEL 14-may-2007", "21364,7496", "2007", "21423,92873"],
            ["LIMONES", "RESOLUCION 1178 DEL 16-jul-2002", "1308,0574", "2002", "1373,778656"],
            ["PIZARRO", "RESOLUCION 1122 DEL 16-may-2001", "7132,4922", "2001", "7061,059792"],
            ["RIO NAYA", "RESOLUCION 6640 DEL 19-nov-2015", "177817,6187", "2015", "178507,7028"],
            ["SAN AGUSTÍN DE TERRÓN", "RESOLUCION 3369 DEL 21-dic-2000", "16852,32", "2000", "16660,62876"],
            ["LA ESPERANZA", "RESOLUCIÓN 0379 DEL 22-may-2008", "1730,2368", "2008", "1760,194272"],
            ["ALEJANDRO RINCÓN DEL RÍO ÑAMBÍ", "RESOLUCION 2788 DEL 13-dic-2006", "9749,8287", "2006", "9911,97118"],
            ["INTEGRACIÓN DEL RÍO CHUARE", "RESOLUCION 1647 DEL 6-oct-2004", "25674,5949", "2004", "25345,4299"],
            ["RÍO CALIMA", "RESOLUCION 2244 DEL 4-dic-2002", "66724,2949", "2002", "66861,31969"],
            ["CHANZARÁ", "RESOLUCION 2430 DEL 1-dic-2005", "3144,3011", "2005", "3375,836719"],
            ["RÍO GUALAJO", "RESOLUCION 2538 DEL 23-dic-2002", "2774,6834", "2002", "2594,161883"],
            ["CONSEJO ORGANIZACIÓN POPULAR CAMPESINA DEL ALTO ATRATO - COCOMOPOCA-", "RESOLUCION 02425 DEL 19-sep-2011", "73317,4938", "2011", "74025,98483"],
            ["SABALETAS", "RESOLUCION 2065 DEL 18-nov-2002", "12238,0876", "2002", "12376,9358"],
            ["RÍO DOMINGODÓ", "RESOLUCION 2803 DEL 22-nov-2000", "38987,9685", "2000", "38265,12538"],
            ["SANQUIANGA", "RESOLUCION 2773 DEL 21-nov-2000", "33429,0614", "2000", "32994,56703"],
            ["GENERAL DEL MUNICIPIO DE NUQUÍ - LOS RISCALES", "RESOLUCION 2206 DEL 4-dic-2002", "31469,872", "2002", "36604,68533"],
            ["LA CUENCA DEL RÍO TOLO Y ZONA COSTERA SUR", "RESOLUCION 1502 DEL 1-ago-2005", "13465,587", "2005", "13220,66211"],
            ["RÍO PILIZÁ", "RESOLUCION 3367 DEL 21-dic-2000", "18329,49", "2000", "18396,02591"],
            ["MANOS UNIDAS DEL SOCORRO", "RESOLUCION 2697 DEL 21-dic-2001", "9664,2407", "2001", "9882,273483"],
            ["SAN ANDRÉS DE USARAGÁ", "RESOLUCION 3368 DEL 21-dic-2000", "13060,1", "2000", "12481,90998"],
            ["MAYOR DEL RÍO ANCHICAYA", "RESOLUCION 2197 DEL 3-dic-2002", "16773,2151", "2002", "14540,13612"],
            ["SAN FRANCISCO CUGUCHO", "RESOLUCION 0156 DEL 9-feb-1998", "8773,762", "1998", "9127,854868"],
            ["CUCHEROS ENSENADA DEL TIGRE", "RESOLUCION 00391 DEL 27-feb-2015", "5296, 8680", "2015", "5270,930169"],
            ["MAYOR DEL MUNICIPIO DE JURADÓ", "RESOLUCION 2199 DEL 3-dic-2002", "27118,5542", "2002", "28998,40036"],
            ["RÍO YURUMANGUÍ", "RESOLUCION 1131 DEL 23-may-2000", "54776", "2000", "52987,18561"],
            ["EL PROGRESO", "RESOLUCION 1178 DEL 12-may-1998", "29969,375", "1998", "28078,47743"],
            ["CAUCANA", "RESOLUCION 1411 DEL 25-may-2010", "747 Has+3868m²", "2010", "1076,562948"],
            ["ALTO GUAPI", "RESOLUCION 1083 DEL 29-abr-1998", "103742,35", "1998", "95069,48474"],
            ["RÍO CACARICA", "RESOLUCION 0841 DEL 26-abr-1999", "103024,3202", "1999", "103255,17"],
            ["LA CUENCA DEL RÍO QUIPARADÓ", "RESOLUCION 2798 DEL 22-nov-2000", "28156,4194", "2000", "27937,38266"],
            ["CUEVITAS", "RESOLUCION 2701 DEL 21-dic-2001", "17283,2648", "2001", "17246,45468"],
            ["VIGÍA DE CURVARADÓ Y SANTA ROSA DE LIMÓN", "RESOLUCION 2808 DEL 22-nov-2000", "33908,7027", "2000", "34250,23408"],
            ["GUADUALITO", "RESOLUCION 1085 DEL 29-abr-1998", "1159,7", "1998", "1090,504115"],
            ["PUERTO ESPAÑA", "RESOLUCION 5055 DEL 8-jun-2014", "9898,6891", "2014", "9937,724742"],
            ["ACAPA", "RESOLUCION 1119 DEL 22-may-2000", "94388,4425", "2000", "83683,12858"],
            ["BAJO MIRA Y FRONTERA", "RESOLUCION 0046 DEL 21-jul-2003", "46481,9407", "2003", "47327,1135"],
            ["NEGROS UNIDOS", "RESOLUCION 2067 DEL 18-nov-2002", "7008,9027", "2002", "7403,696214"],
            ["MUNICIPIO DE PUEBLO RICO RISARALDA", "RESOLUCION 2725 DEL 17-dic-2001", "4802,9463", "2001", "11063,55151"],
            ["LA NUEVA", "RESOLUCION 0289 DEL 13-dic-1996", "12738,366", "1996", "15659,30335"],
            ["LA MADRE", "RESOLUCION 0286 DEL 13-dic-1996", "8231,453", "1996", "9127,049067"],
            ["LA CUENCA DEL RÍO SALAQUÍ", "RESOLUCION 2802 DEL 22-nov-2000", "57914,2375", "2000", "60134,11203"],
            ["INTEGRACIÓN DE TELEMBÍ", "RESOLUCION 0491 DEL 10-abr-2002", "15330,7296", "2002", "16541,49811"],
            ["RÍO JIGUAMIANDÓ", "RESOLUCION 2801 DEL 22-nov-2000", "54973,8368", "2000", "54774,76604"],
            ["CORTINA VERDE MANDELA", "RESOLUCION 0276 DEL 1-feb-2006", "1204,7341", "2006", "1363,959306"],
            ["LLANO BAJO", "RESOLUCION 0333 DEL 8-mar-2002", "5014,2247", "2002", "4986,478205"],
            ["SAN ISIDRO", "RESOLUCION 0157 DEL 9-feb-1998", "12851,64", "1998", "12136,07094"],
            ["LA CUENCA DEL RÍO ACANDÍ SECO, EL CEDRO Y JUANCHO", "RESOLUCION 1499 DEL 1-ago-2005", "5571,1496", "2005", "5346,454292"],
            ["CLAVELLINO", "RESOLUCION 0290 DEL 13-dic-1996", "3709", "1996", "4188,841769"],
            ["LA MOLANA", "RESOLUCION 0631 DEL 10-mar-2015", "18.073.729", "2015", "1812,615265"],
            ["POR LA IDENTIDAD CULTURAL", "RESOLUCION 2726 DEL 27-dic-2001", "12399,7552", "2001", "12606,55266"],
            ["UNIÓN DEL RÍO CHAGÜÍ", "RESOLUCION 2201 DEL 3-dic-2002", "27214,6891", "2002", "27746,76876"],
            ["LA MAMUNCIA, PARTE MEDIA DEL RÍO MICAY", "RESOLUCION 2431 DEL 1-dic-2005", "34252,0774", "2005", "34880,44262"],
            ["ALTO POTEDÓ", "RESOLUCION 0401 DEL 28-abr-2003", "1959,9624", "2003", "1958,377265"],
            ["RÍO NAPI", "RESOLUCION 1082 DEL 29-abr-1998", "47007,68", "1998", "44477,94453"],
            ["LA NUEVA RESERVA ACANURE", "RESOLUCION 02806 DEL 13-dic-2012", "12391,9974", "2012", "12501,0668"],
            ["CUELLAR RÍO SAN JUAN", "RESOLUCION 2790 DEL 13-dic-2006", "385,9728", "2006", "365,140911"],
            ["RÍO SATINGA", "RESOLUCION 3292 DEL 18-dic-2000", "24507,04", "2000", "25326,09209"],
            ["RENACER NEGRO", "RESOLUCION 1120 DEL 16-may-2001", "71010,6597", "2001", "71220,96796"],
            ["LA CUENCA DEL RÍO ISCUANDÉ", "RESOLUCION 2432 DEL 1-dic-2005", "76590,6245", "2005", "73601,95112"],
            ["RÍO PEPE", "RESOLUCION 1125 DEL 23-may-2000", "8191,629", "2000", "8393,45291"],
            ["POR EL DESARROLLO INTEGRAL", "RESOLUCION 0049 DEL 21-jul-2003", "11327,835", "2003", "11707,34356"],
            ["VILLA CONTO", "RESOLUCION 0160 DEL 9-feb-1998", "29026,1319", "1998", "27595,53688"],
            ["MAYOR DEL MEDIO ATRATO ACIA", "RESOLUCION 4566 DEL 29-dic-1997", "695245,1124", "1997", "707973,1982"],
            ["MANGLARES DEL RÍO MICAY", "RESOLUCION 0275 DEL 1-feb-2006", "38746,948", "2006", "40884,51754"],
            ["ALTO RÍO SEQUIHONDA", "RESOLUCION 1649 DEL 6-oct-2004", "9714,6329", "2004", "9852,98793"],
            ["LA CUENCA DEL RÍO ACANDÍ ZONA COSTERA NORTE", "RESOLUCION 1501 DEL 1-ago-2005", "10443,3116", "2005", "10977,43427"],
            ["MAYOR DEL ALTO SAN JUAN \"ASOCASAN\"", "RESOLUCION 2727 DEL 27-dic-2001", "54517,4625", "2001", "52666,26823"],
            ["RÍO GUAJUÍ", "RESOLUCION 1124 DEL 16-may-2001", "35735,7118", "2001", "36747,0364"],
            ["JUANCHACO", "RESOLUCION 0137 DEL 30-sep-2016", "2028,3576", "2016", "2033,656629"],
            ["RÍO CAJAMBRE", "RESOLUCION 3305 DEL 29-dic-1999", "75710", "1999", "74179,79549"],
            ["RENACER CAMPESINO", "RESOLUCION 2805 DEL 13 - DIC- 2012", "6707,3707", "2012", "6780,967403"],
            ["LOS MANGOS", "RESOLUCION 1128 DEL 23-may-2000", "364,6435", "2000", "365,676733"]
];

            const customDataTable2 = document.getElementById('customDataTable2');
            const customSearchInput2 = document.getElementById('customSearchInput2');
            const customShowEntriesSelect2 = document.getElementById('customShowEntries2');
            const customPrevPageBtn2 = document.getElementById('customPrevPageBtn2');
            const customNextPageBtn2 = document.getElementById('customNextPageBtn2');
            const customPaginationInfo2 = document.getElementById('customPaginationInfo2');
            let customRegistrosPorPagina2 = parseInt(customShowEntriesSelect2.value);
            let customPaginaActual2 = 1;
            let customSortColumnIndex2 = -1; // Columna de orden inicial
            let customSortDirection2 = 1; // 1 para ascendente, -1 para descendente

            function customMostrarTabla2(registros) {
                const customTotalPaginas2 = Math.ceil(registros.length / customRegistrosPorPagina2);
                const customInicio2 = (customPaginaActual2 - 1) * customRegistrosPorPagina2;
                const customFin2 = customInicio2 + customRegistrosPorPagina2;

                // Limpia la tabla
                customDataTable2.querySelector('tbody').innerHTML = '';

                // Ordenar los registros en función de la columna seleccionada
                if (customSortColumnIndex2 >= 0) {
                    registros.sort((a, b) => {
                        return a[customSortColumnIndex2].localeCompare(b[customSortColumnIndex2]) * customSortDirection2;
                    });
                }

                for (let i = customInicio2; i < customFin2; i++) {
                    if (i >= registros.length) break;

                    let tr = document.createElement('tr');
                    for (let j = 0; j < registros[i].length; j++) {
                        let td = document.createElement('td');
                        td.textContent = registros[i][j];
                        tr.appendChild(td);
                    }
                    customDataTable2.querySelector('tbody').appendChild(tr);
                }

                customPaginationInfo2.textContent = `Mostrando ${customInicio2 + 1} a ${Math.min(customFin2, registros.length)} de ${registros.length} registros`;
            }

            function customFiltrarRegistros2() {
                const customFiltro2 = customSearchInput2.value.toLowerCase();
                const customRegistrosFiltrados2 = customDatosEjemplo2.filter(registro => {
                    return registro.some(dato => dato.toLowerCase().includes(customFiltro2));
                });

                customMostrarTabla2(customRegistrosFiltrados2);
            }

            function customCambiarShowEntries2() {
                customRegistrosPorPagina2 = parseInt(customShowEntriesSelect2.value);
                customMostrarTabla2(customDatosEjemplo2);
            }

            function customGoToPrevPage2() {
                if (customPaginaActual2 > 1) {
                    customPaginaActual2--;
                    customMostrarTabla2(customDatosEjemplo2);
                }
            }

            function customGoToNextPage2() {
                const customTotalPaginas2 = Math.ceil(customDatosEjemplo2.length / customRegistrosPorPagina2);
                if (customPaginaActual2 < customTotalPaginas2) {
                    customPaginaActual2++;
                    customMostrarTabla2(customDatosEjemplo2);
                }
            }

            function customHandleColumnSort2(event) {
                const customColumnIndex2 = event.target.getAttribute('data-sort');

                if (customColumnIndex2 === customSortColumnIndex2.toString()) {
                    // Cambiar la dirección de orden
                    customSortDirection2 *= -1;
                } else {
                    // Ordenar por la columna seleccionada de forma ascendente
                    customSortColumnIndex2 = parseInt(customColumnIndex2);
                    customSortDirection2 = 1;
                }

                customMostrarTabla2(customDatosEjemplo2);
            }

            customShowEntriesSelect2.addEventListener('change', customCambiarShowEntries2);
            customSearchInput2.addEventListener('input', customFiltrarRegistros2);
            customPrevPageBtn2.addEventListener('click', customGoToPrevPage2);
            customNextPageBtn2.addEventListener('click', customGoToNextPage2);

            // Escuchar eventos de clic en los encabezados de columna para ordenar
            const customColumnHeaders2 = document.querySelectorAll('#customDataTable2 th.cursor-pointer');
            customColumnHeaders2.forEach(header => header.addEventListener('click', customHandleColumnSort2));

            // Mostrar la tabla inicialmente
            customMostrarTabla2(customDatosEjemplo2);
    </script>
</body>



          </div>
        </div>

        <h2 id="accordion-collapse-heading-3">
            <button type="button" class="flex bg-orange-600 items-center justify-between w-full p-4 font-medium text-left text-white border border-b-0 border-green-500  focus:ring-green-500 dark:focus:ring-green-500 dark:border-green-500 dark:text-white-400 hover:bg-orange-600 dark:hover:bg-orange-600" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                <span>RESGUARDO INDIGENAS</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
        </h2>

        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <div class="p-5 border border-t-0 border-white-200 dark:border-white-700">
                 <div class="container mx-auto p-4">
                    <style>
                        /* Estilos para los campos de datos */
                        #customDataTable td {
                            background-color: white;
                            border: 2px solid #000000;
                            text-align: center; /* Para centrar el contenido de las celdas */
                            padding: 8px;
                           /* Espaciado interno para un mejor aspecto */
                        }
                        /* Estilos para los encabezados de columna */
                        #customDataTable th {
                            border: 1px solid #ccc;
                            text-align: center; /* Para centrar el contenido de los encabezados */
                            padding: 8px; /* Espaciado interno para un mejor aspecto */
                        }
                    </style>
                            <input type="text" id="customSearchInput" class="w-full px-4 py-2 mb-4 border border-blue-500 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Buscar...">

                            <div class="flex justify-between items-center mt-4">
                                <div>
                                    <label for="customShowEntries" class="text-gray mb-4">Mostrar entradas:</label>
                                    <select id="customShowEntries" class="px-2 py-1 mb-4 border border-blue-500-500 rounded-md">
                                        <option value="10">10</option>
                                        <option value="15" selected>15</option>
                                        <option value="25">25</option>
                                    </select>
                                </div>
                                <div class="flex items-center">
                                    <button id="customPrevPageBtn" class="mr-2 px-4 py-2 mb-4 bg-blue-500 hover:bg-orange-600 text-white rounded-md">Anterior</button>
                                    <div id="customPaginationInfo" class="text-black"></div>
                                    <button id="customNextPageBtn" class="ml-2 px-4 py-2 mb-4 bg-blue-500 hover:bg-orange-600 text-white rounded-md">Siguiente</button>
                                </div>
                            </div>
                            <table id="customDataTable" class="w-full bg-white shadow-md rounded-lg">
                                <thead class="bg-blue-500 text-white">
                                    <tr>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="0">NOMBRE DE RESGUARDO</th>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="1">CÓDIGO TERRITORIAL</th>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="2">TIPO ACTO</th>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="3"># ACTO</th>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="4">FECHA DE ACTO</th>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="5">ÁREA DE ACTO</th>
                                        <th class="px-4 py-2 cursor-pointer" data-sort="6">PUEBLO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se insertarán los registros -->
                                </tbody>
                            </table>

                        </div>

                        <script>

                            let customDatosEjemplo =
                            [
                                [  "NAPIPÍ",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "63",  "1/10/1986",  "22474,12275",  "EMBERA KATÍO"],
                                [  "PARED Y PARECITO",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "18",  "10/04/2003",  "1849,5273",  "EMBERA"],
                                [  "GUADUALITO",  "LEGALIZACIÓN DECRETO 107",  "ACUERDO",  "17",  "10/12/2002",  "471,528208",  "EMBERA"],
                                [  "EL PIÑAL",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "6",  "20/02/2001",  "2906,88453",  "EMBERA"],
                                [  "CAIMANERO DE JAMPAPA",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "27",  "3/04/1987",  "1774,04544",  "EMBERA KATÍO"],
                                [  "PESCADITO",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "7",  "20/02/2001",  "270,13551",  "EMBERA KATÍO"],
                                [  "PLAYITA SAN FRANCISCO",  "LEGALIZACIÓN DECRETO 107",  "ACUERDO",  "178",  "3/09/2009",  "3239,688742",  "EPERARA SIAPIDARA"],
                                [  "PASO DEL RÍO SALADO",  "LEGALIZACIÓN DECRETO 107",  "ACUERDO",  "10",  "21/12/2015",  "6547,698505",  "AWÁ"],
                                [  "SANTA MARÍA DE PANGALA",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "15",  "18/02/1987",  "12216,71637",  "WAUNANA"],
                                [  "SAN JUAN DE PAMPON",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "38",  "3/10/2000",  "41,883815",  "EPERARA SIAPIDARA TRUA"],
                                [  "DOXURA",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "36",  "24/09/2001",  "108,544976",  "EMBERA CHAMI"],
                                [  "ALTO RÍO TAGACHI",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "24",  "30/04/1986",  "21720,65722",  "EMBERA KATÍO"],
                                [  "EMBERA DRUA",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "2",  "10/04/2003",  "17,111276",  "EMBERA KATÍO"],
                                [  "LA JAGUA-GUACHAL-PITALITO",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "58",  "29/09/1992",  "1251,362197",  "EMBERA EPERARA"],
                                [  "YARUMAL Y EL BARRANCO",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "42",  "3/08/1992",  "5121,39809",  "EMBERA KATÍO"],
                                [  "CHINGUIRITO MIRA",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "29",  "10/04/2003",  "802,176227",  "AWÁ"],
                                [  "ANDABÚ",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "27",  "31/05/1999",  "16530,21292",  "EMBERA KATÍO"],
                                [  "RAMOS-MONGON-MANCHURIA",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "29",  "13/07/1992",  "4217,275829",  "AWÁ"],
                                [  "OPOGADÓ - DOGUADÓ",  "LEGALIZACIÓN DECRETO 107",  "RESOLUCIÓ",  "44",  "10/04/2003",  "30107,06142",  "EMBERA KATÍO"],
                                ["EL SILENCIO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 238", "23/12/2010", "60,834963", "EMBERA KATÍO"],
                                ["PUADÓ, LA LERMA, MATARÉ, Y TERDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 39", "3/07/1986", "12002,81063", "WOUNAAN"],
                                ["TANELA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 101", "27/07/1982", "1029,398386", "KATÍO"],
                                ["SANTA ROSA DE IJUA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 56", "29/09/1992", "7771,485248", "WAUNANA"],
                                ["ALMORZADERO, SAN ISIDRO Y LA NUEVA UNIÓN", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 15", "10/12/2002", "4971,950409", "EPERARA SIAPIDARA"],
                                ["NUEVO PITALITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 55", "29/09/1992", "2279,468738", "EMBERA KATÍO"],
                                ["CABECERAS O PUERTO PIZARÍO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 13", "3/05/1983", "3857,930182", "WAUNANA"],
                                ["VALLE DE PERDIDAS", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 50", "17/10/1995", "8692,900368", "EMBERA KATÍO"],
                                ["RÍO MURINDÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 14", "18/02/1987", "18464,13998", "EMBERA KATÍO"],
                                ["BUENAVISTA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 54", "29/09/1992", "2457,577504", "WAUNANA"],
                                ["YU YIC KWE", "LEGALIZACIÓN DECRETO 107", "ACUERDO 88", "20/12/2006", "2416,183951", "NASA PAEZ"],
                                ["MAJORÉ-AMBURÁ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 14", "24/05/1996", "6810,609188", "EMBERA KATÍO"],
                                ["BURUJON O LA UNIÓN-SAN BERNARDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 12", "3/05/1983", "6370,716869", "WAUNANA"],
                                ["RÍO NEGUA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 22", "24/04/1985", "4656,570895", "EMBERA KATÍO"]
                                ["MONDO-MONDOCITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 72", "29/08/1988", "1379,347072", "EMBERA KATÍO"],
                                ["EL GRAN SABALO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 70", "14/04/1993", "42715,16347", "AWÁ"],
                                ["CHOROMANDÓ ALTO Y MEDIO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 31", "30/11/1998", "3054,521765", "EMBERA KATÍO"],
                                ["CRISTIANÍA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 59", "7/12/1995", "1122,34956", "EMBERA KATÍO"],
                                ["CHAGPIEN TORDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 75", "10/11/1983", "22462,41591", "WAUNANA"],
                                ["RÍO TAPARAL", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 70", "6/11/1985", "14163,97179", "WAUNANA"],
                                ["GUAGUANDÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 46", "26/06/1989", "12826,76472", "EMBERA"],
                                ["ALTO RÍO CUIA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 49", "10/07/1986", "22322,30779", "EMBERA KATÍO"],
                                ["CUAYQUER DEL ALTO ALBI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 41", "3/07/1986", "4362,665481", "AWÁ"],
                                ["TOGOROMA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 107", "15/12/1981", "8626,298874", "WAUNANA"],
                                ["JAGUAL RÍO CHINTADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 136", "3/12/1980", "41332,00566", "EMBERA KATÍO"],
                                ["RÍO PURRICHA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 26", "13/07/1992", "17752,59626", "EMBERA"],
                                ["ALTO RÍO BOJAYÁ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 48", "10/07/1986", "49427,19505", "EMBERA KATÍO"],
                                ["SAN AGUSTIN-LA FLORESTA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 26", "24/05/1996", "51,182632", "EPERARA SIAPIDARA"],
                                ["CUCHILLA-PALMAR", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 82", "14/04/1993", "2581,283113", "AWÁ"],
                                ["LANAS", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 3", "25/01/1984", "7561,325162", "EMBERA KATÍO"],
                                ["ISLA DEL MONO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 34", "31/05/1999", "1586,157129", "EPERARA SIAPIDARA"],
                                ["PALMAR IMBI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 82", "14/04/1993", "7345,420015", "AWÁ"],
                                ["WASIRUMA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 5", "16/02/1994", "48,685739", "EMBERA"],
                                ["INDA GUACARAY", "LEGALIZACIÓN DECRETO 107", "ACUERDO 221", "26/10/2010", "1235,585927", "AWÁ"],
                                ["LA PURIA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 56", "23/12/1998", "4055,311079", "EMBERA KATÍO"],
                                ["PUERTO LIBIA TRIPICAY", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 41", "30/11/1998", "2138,72428", "EMBERA KATÍO"],
                                ["RÍO AMÉ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 79", "17/12/1990", "3396,032905", "EMBERA KATÍO"],
                                ["JAIKERAZAVI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 28", "31/05/1999", "35375,24105", "EMBERA KATÍO"],
                                ["DOMINICO, LONDOÑO Y APARTADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 73", "19/11/1990", "6624,514889", "EMBERA KATÍO"],
                                ["PAVARANDÓ Y AMPARRADÓ MEDIO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 76", "19/11/1990", "22100,69623", "EMBERA KATÍO"],
                                ["NUSIDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 27", "29/07/1998", "261,232087", "EMBERA"],
                                ["GUAYABAL DE PARTADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 54", "24/07/1987", "4169,618083", "EMBERA KATÍO"],
                                ["CUASCUABI-PALDUBI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 22", "21/06/1994", "575,469563", "AWÁ"],
                                ["RÍO CHAJERADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 103", "18/12/1989", "41841,70503", "EMBERA KATÍO"],
                                ["SANTA MARTA DE CURICHE", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 20", "18/03/1987", "10139,2017", "WAUNANA"],
                                ["GEGORÁ, QUIPARÁ, MURANDÓ, TIRAVENADO Y JIGUADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 11", "28/06/2001", "3673,508449", "EMBERA KATÍO"],
                                ["ABEJERO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 79", "9/12/1999", "224,71697", "EMBERA KATÍO"],
                                ["GUARANDO CARRIZAL", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 35", "31/05/1999", "69,285546", "EMBERA KATÍO"],
                                ["NARIKIZAVI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 1", "20/02/2001", "276,177817", "EMBERA KATÍO"],
                                ["PEÑA BLANCA-RÍO TRUANDÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 40", "3/08/1992", "57961,41056", "EMBERA KATÍO"],
                                ["QUEBRADA CHICUE RÍO TANGUI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 28", "13/07/1992", "2614,014928", "EMBERA KATÍO"],
                                ["CHUSCAL Y TUGURIDOCITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 41", "21/07/1988", "4755,970305", "EMBERA"],
                                ["MUNGARADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 37", "31/05/1999", "533,883594", "EMBERA KATÍO"],
                                ["BELLAVISTA-UNIÓN PITALITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 40", "15/08/1984", "29274,43353", "WAUNANA"],
                                ["GITO DOCABU", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 33", "24/09/2001", "2456,060862", "EMBERA CHAMI"],
                                ["PATIO BONITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 16", "10/04/2003", "838,288789", "EMBERA KATÍO"],
                                ["BUCHADÓ AMPARRADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 1", "15/01/1990", "8467,697987", "EMBERA KATÍO"],
                                ["RÍO ORPUA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 21", "18/03/1987", "21802,40038", "WAUNANA"],
                                ["SANTA ROSITA", "LEGALIZACIÓN DECRETO 107", "ACUERDO 220", "26/10/2010", "403,653991", "AWÁ"],
                                ["RÍO DAGUA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 4", "25/01/1984", "52,055931", "WAUNANA"],
                                ["QUEBRADA GRANDE", "LEGALIZACIÓN DECRETO 107", "ACUERDO 71", "17/08/2006", "775,375723", "EPERARA SIAPIDARA"],
                                ["RÍO BEBARA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 38", "30/11/1998", "37202,73312", "EMBERA KATÍO"],
                                ["JURADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 102", "27/07/1982", "16554,26212", "EMBERA KATÍO"],
                                ["CHONARA HUENA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 45", "10/04/2003", "460,55207", "EMBERÁ (EPERARA-SIAPIDARA)"],
                                ["SALAQUI Y PAVARANDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 15", "3/05/1983", "105953,5822", "EMBERA KATÍO"],
                                ["GUALCALA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 30", "13/07/1992", "17118,95092", "AWÁ"],
                                ["CAIMÁN NUEVO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 73", "12/12/1992", "8091,379427", "CUNA"],
                                ["NUNALBÍ ALTO ULBÍ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 32", "10/04/2003", "9823,575737", "AWÁ"],
                                ["SABALETA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 1", "14/04/1997", "667,774679", "EMBERA WOUNAAN"],
                                ["EL CHARCÓN", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 33", "30/11/1998", "137,554499", "EMBERA KATÍO"],
                                ["YABERARADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 30", "31/05/1999", "11776,80708", "EMBERA KATÍO"],
                                ["CHONTADURAL CAÑERO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 24", "24/05/1996", "9133,264358", "EMBERA KATÍO"],
                                ["TIOSILIDIO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 11", "3/05/1983", "4518,481902", "WAUNANA"],
                                ["ALTO CARTAGENA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 22", "10/12/2002", "4126,173506", "AWÁ"],
                                ["TORTUGAÑA, TELEMBI, PUNDE, PITADERO, BRAVO, TRONQUERIA Y ZABALETA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 25", "29/07/1998", "19493,84559", "AWÁ"],
                                ["DEARADE BIAKIRUDE", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 13", "29/06/2000", "6312,23346", "EMBERA"],
                                ["GUADUAL, CUMBAS, MAGÜI, INVINA Y ARRAYÁN", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 51", "29/11/1994", "5191,67245", "AWÁ"],
                                ["HONDA RÍO GUIZA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 26", "10/04/2003", "306,006058", "AWÁ"],
                                ["CUAMBI-YASLAMBI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 207", "2/08/1978", "2548,046073", "AWÁ"],
                                ["CAÑÓN DEL RÍO SANQUININI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ 43", "3/08/1992", "2744,903839", "EMBERA KATÍO"],
                                ["PIPALTA-PALBI-YAGUAPI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "11", "24/05/1996", "2590.777376", "AWÁ"],
                                ["MIASA DE PARTADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "36", "31/05/1999", "2268.886793", "EMBERA KATÍO"],
                                ["RÍO PANGÜI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "88", "27/07/1982", "6624.538185", "EMBERA KATÍO"],
                                ["QUEBRADA QUERA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "16", "28/06/1992", "4193.131621", "EMBERA KATÍO"],
                                ["RÍOS VALLE Y BOROBORO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "30", "8/05/1984", "23065.83175", "EMBERA KATÍO"],
                                ["HURTADO Y TEGAVERA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "72", "2/12/1992", "4221.953035", "EMBERA KATÍO"],
                                ["VILLA NUEVA JUNA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "1", "27/02/2002", "456.980427", "EMBERA"],
                                ["PUERTO ANTIOQUIA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "42", "30/12/1998", "286.557152", "EMBERA"],
                                ["LA FLORESTA, SANTA ROSA Y SAN FRANCISCO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "94", "7/11/1989", "9447.83839", "EMBERA KATÍO"],
                                ["AWÁ ÑAMBL PIEDRA VERDE", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "7", "21/12/2015", "7366.679139", "AWÁ"],
                                ["EL 18", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "330", "20/02/2014", "1053.70339", "EMBERA KATÍO"],
                                ["CUTI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "103", "27/07/1982", "240.367179", "CUNA"],
                                ["NULPE MEDIO-ALTO Y RÍO SAN JUAN", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "16", "25/05/1994", "38083.28753", "AWÁ"],
                                ["RÍO ICHO Y LA QUEBRADA BARATUDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "21", "24/04/1985", "5121.993856", "EMBERA"],
                                ["CUALQUER INTEGRADO LA MILAGROSA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "20", "10/12/2002", "4152.418887", "AWÁ"],
                                ["GRAN ROSARIO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "25", "24/05/1996", "17443.20178", "AWÁ"],
                                ["RÍOS JURUBIDA-CHORI Y ALTO BAUDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "15", "21/04/1982", "80147.62946", "EMBERA KATÍO"],
                                ["LOMA DE CITABARA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "24", "29/07/1998", "276.591604", "EMBERA CHAMI"],
                                ["RÍO NUQUI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "13", "21/04/1982", "9935.168535", "EMBERA KATÍO"],
                                ["PERANCHO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "37", "3/08/1992", "905.894999", "EMBERA KATÍO"],
                                ["RÍOS PATO Y JENGADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "39", "21/07/1988", "3131.406902", "EMBERA KATÍO"],
                                ["PIALAPI-PUEBLO VIEJO-SAN MIGUEL-YARE", "COLONIALES", "RESOLUCIÓ", "1", "9/02/1993", "3294.754845", "AWÁ"],
                                ["DOKERAZAVI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "28", "24/09/2001", "691.939675", "EMBERA"],
                                ["INDA ZABALETA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "30", "10/04/2003", "6264.903364", "AWÁ"],
                                ["JENGADO APARTADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "15", "23/06/1992", "4487.816472", "EMBERA KATÍO"],
                                ["LA IGUANA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "137", "3/12/1980", "10198.6268", "EMBERA KATÍO"],
                                ["LAS PLAYAS", "LEGALIZACIÓN DECRETO 1071", "RESOLUCIÓ", "29", "31/05/1999", "177.118762", "EMBERA KATÍO"],
                                ["BOCHOROMA-BOCHOROMACITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "71", "29/08/1988", "520.787771", "EMBERA KATÍO"],
                                ["NUSSI PURRU", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "35", "3/10/2000", "15008.23696", "EMBERA WOUN"],
                                ["PINGULLO-SARDINERO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "144", "14/12/1993", "12110.07663", "AWÁ"],
                                ["CUASBIL-LA FALDADA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "49", "29/11/1994", "1168.068483", "AWÁ"],
                                ["SAUNDE GUIGUAY", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "28", "10/04/2003", "7547.246572", "AWÁ"],
                                ["PAINA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "54", "23/12/1998", "2851.839643", "EMBERA KATÍO"],
                                ["ALTO SINU, ESMERALDA CRUZ GRANDE E IWAGADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "2", "9/02/1993", "116653.333", "EMBERA KATÍO"],
                                ["PLANADAS TELEMBÍ", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "97", "15/02/2007", "3131.075806", "AWÁ"],
                                ["SABALETERA SAN ONOFRE Y EL TIGRE", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "19", "19/04/2003", "2092.347144", "EMBERA KATÍO"],
                                ["ALTO DEL RÍO MUNGUIDÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "17", "23/02/1992", "5594.458051", "EMBERA KATÍO"],
                                ["MAMEY DE DIPURDÚ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "20", "10/04/2003", "205.557606", "EMBERA"],
                                ["PEÑA LA ALEGRIA", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "212", "9/07/2010", "31.187051", "AWÁ"],
                                ["BETE-AUROBETE Y AURO DEL BUEY", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "16", "3/05/1983", "11539.64782", "EMBERA KATÍO"],
                                ["EL SANDE", "COLONIALES", "RESOLUCIÓ", "43", "10/12/1997", "8771.939158", "AWÁ"],
                                ["EL DOCE O QUEBRADA BORBOLLÓN", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "16", "21/04/1982", "1224.550326", "EMBERA KATÍO"],
                                ["SANANDOCITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "8", "20/02/2001", "7788.053115", "EMBERA KATÍO"],
                                ["LA DELFINA", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "99", "15/02/2007", "782.786384", "NASA EMBERA CHAMI"],
                                ["SANTA CECILIA DE LA QUEBRADA ORO CHOCÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "49", "10/07/1989", "5032.479882", "EMBERA KATÍO"],
                                ["RÍOS UVA Y POGUE-QUEBRADA TAPARAL.", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "23", "3/02/1981", "50340.06059", "EMBERA KATÍO"],
                                ["RÍO DOMINGODO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "35", "21/07/1983", "24333.91035", "EMBERA KATÍO"],
                                ["GUAYACAN-SANTA ROSA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "54", "24/07/1989", "229.894078", "WAUNANA"],
                                ["PUERTO LIBRE DEL RÍO PEPÉ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "50", "10/07/1989", "2093.171899", "EMBERA KATÍO"],
                                ["INFI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "186", "2/11/1977", "3314.513194", "EMBERA KATÍO"],
                                ["RÍO GUANGÜI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "91", "27/07/1982", "22601,90484", "EMBERA KATÍO"],
                                ["ORDO SIVIRÚ AGUACLARA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "57", "29/09/1992", "2510,226481", "EMBERA KATÍO"],
                                ["ANDAGUEDA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "185", "13/12/1979", "56411,03923", "EMBERA KATÍO"],
                                ["AMPARRADO ALTO Y MEDIO Y QUEBRADA CHONTADURO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "42", "1/11/1994", "17816,81308", "EMBERA KATÍO"],
                                ["CALLE SANTA ROSA RÍO SAIJA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "14", "3/05/1983", "22365,20897", "EMBERA KATÍO"],
                                ["UNIFICADO CHAMÍ DEL RÍO SAN JUAN", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "1", "29/01/1986", "26256,56807", "EMBERA KATÍO"],
                                ["RIO NAYA COMUNIDAD JOAQUINCITO", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "5", "21/12/2015", "2430,091884", "EMBERA"],
                                ["LA CRISTALINA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "14", "29/06/2000", "13586,90024", "EMBERA CHAMI"],
                                ["RÍOS CATRU-DUBASA Y ANCOSO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "260", "11/10/2011", "56896,29138", "EMBERA KATÍO"],
                                ["TRONQUERIA, PULGANDE-PALICITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "13", "28/06/2001", "12379,22499", "AWÁ"],
                                ["CHACHAJO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "103", "15/12/1981", "2133,859019", "WAUNANA"],
                                ["EL CEDRO, LAS PEÑAS, LA BRAVA, PILVÍ Y LA PINTADA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "18", "29/06/2000", "5001,190003", "AWÁ"],
                                ["RÍO LA PLAYA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "72", "14/04/1993", "5179,055246", "EMBERA KATÍO"],
                                ["LA PALMA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "3", "11/05/1998", "116,098842", "EMBERA CHAMI"],
                                ["PAPAYO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "102", "15/12/1981", "3316,273767", "WAUNANA"],
                                ["PICHICORA, CHICUE, PUERTO ALEGRE", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "40", "30/11/1998", "15191,32516", "EMBERA KATÍO"],
                                ["CHIMURRO Y NENDÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "89", "10/10/1988", "13357,03737", "EMBERA KATÍO"],
                                ["SIRENA BERRECUY", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "29", "24/09/2001", "1210,30825", "EMBERA"],
                                ["RÍO SATINGA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "95", "7/11/1989", "2653,122401", "EMBERA KATÍO"],
                                ["RÍO MUMBU", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "63", "21/09/1983", "3354,313606", "EMBERA KATÍO"],
                                ["CHAQUENODA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "31", "14/08/1996", "15165,73748", "EMBERA KATÍO"],
                                ["DOCORDO-BALSALITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "106", "15/12/1981", "4916,234982", "WAUNANA"],
                                ["LA LOMITA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "55", "23/12/1998", "993,879316", "EMBERA KATÍO"],
                                ["CHIGORODO MEMBA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "15", "10/04/2003", "2438,757108", "EMBERA"],
                                ["MOTORDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "61", "19/08/1987", "461,430653", "EMBERA KATÍO"],
                                ["EYAKERA DOGIBI", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "303", "17/04/2013", "3157,568171", "EMBERA DODIBA"],
                                ["DO IMAMA TUMA Y BELLA LUZ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "14", "10/04/2003", "3027,147509", "EMBERA"],
                                ["PULGANDE CAMPOALEGRE", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "39", "31/05/1999", "1021,706418", "AWÁ"],
                                ["LA UNIÓN CHOCO - SAN CRISTOBAL", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "36", "22/05/1984", "19618,05749", "WAUNANA"],
                                ["EL FIERA", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "224", "26/10/2010", "4444,600739", "EMBERA KATÍO"],
                                ["ELVEINTE, PLAYALTA Y EL NOVENTA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "83", "1/07/1982", "4348,564734", "EMBERA KATÍO"],
                                ["RÍO BEBARAMA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "66", "16/08/1988", "8144,161757", "EMBERA KATÍO"],
                                ["VANIA CHAMÍ DE ARGELIA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "50", "30/11/1998", "90,06662", "EMBERA CHAMI"],
                                ["AGUACLARA Y BELLA LUZ DEL RÍO AMPORÁ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "23", "10/04/1989", "9296,235519", "EMBERA KATÍO"],
                                ["RÍOS TORREIDO Y CHIMANI", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "62", "21/09/1983", "6336,948352", "EMBERA KATÍO"],
                                ["MURRI-PANTANOS", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "19", "24/05/1996", "31784,14493", "EMBERA KATÍO"],
                                ["ALTO BONITO VIRA VIRA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "16", "10/12/2002", "3671,978515", "EMBERA"],
                                ["SEVER", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "29", "14/08/1996", "10217,02342", "EMBERA KATÍO"],
                                ["PLAYA BENDITA", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "179", "3/09/2009", "4358,269266", "EPERARA SIAPIDARA"],
                                ["COPE DEL RÍO INGARA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "6", "24/05/1996", "268,456065", "EMBERA KATÍO"],
                                ["TARENA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "73", "29/08/1988", "5094,612866", "EMBERA KATÍO"],
                                ["LA RAYA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "38", "3/08/1992", "5029,760367", "EMBERA KATÍO"],
                                ["MORRITO", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "68", "17/08/2006", "908,890591", "EPERARA SIAPIDARA"],
                                ["SANQUIANGUITA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "80", "9/12/1999", "654,996738", "EPERARA SIAPIDARA"],
                                ["PUERTO CHICHILIANO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "17", "10/04/2003", "308,036005", "EMBERA WAUNAN"],
                                ["RÍO PICHIMA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "71", "6/11/1985", "9228,876198", "WAUNANA"],
                                ["LOS NIASA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "17", "24/05/1996", "37,398635", "EMBERA CHAMI"],
                                ["LA TURBIA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "23", "26/03/1990", "28795,40269", "AWÁ"],
                                ["PEÑAS DEL OLVIDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "4", "11/05/1998", "246,750976", "EMBERA CHAMI"],
                                ["TRAPICHE DEL RÍO PEPÉ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "51", "10/07/1989", "967,677481", "EMBERA KATÍO"],
                                ["RÍO JARAPETÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "16", "28/02/1984", "5663,438398", "EMBERA KATÍO"],
                                ["RÍO QUIPARADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "61", "21/09/1983", "9689,883007", "EMBERA KATÍO WAUNANA"],
                                ["RÍO GARRAPATAS", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "43", "11/06/1987", "14334,3666", "EMBERA KATÍO"],
                                ["RÍO PAVASA Y QUEBRADA JELLA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "77", "14/04/1993", "13755,7825", "EMBERA KATÍO"],
                                ["BAJO GRANDE", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "12", "28/06/2001", "2443,777085", "EMBERA"],
                                ["CHIDIMA TOLO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "5", "20/02/2001", "4483,598978", "EMBERA KATÍO"],
                                ["PIGUAMBI PALANGALA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "38", "31/05/1999", "493,663889", "AWÁ"],
                                ["TOKOLLORO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "9", "20/02/2001", "254,451134", "KATÍO"],
                                ["EL VEINTIUNO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "3", "25/01/1994", "245,571813", "EMBERA"],
                                ["INTEGRADO EL CHARCO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "37", "3/10/2000", "3824,658158", "EPERARA SIAPIDARA"],
                                ["GUELNAMBI-CARAÑO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "44", "1/11/1994", "2660,061041", "GUELNAMBI-CARAÑO"],
                                ["JENATURADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "9", "22/02/1995", "596,408084", "EMBERA KATÍO"],
                                ["TUNGINA Y APARTADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "74", "19/11/1990", "8380,231966", "EMBERA KATÍO"],
                                ["ALTO RÍO BUEY", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "23", "30/04/1986", "13126,49264", "EMBERA KATÍO"],
                                ["PERANCHITO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "39", "3/08/1992", "1465,519009", "EMBERA KATÍO"],
                                ["URADÁ JIGUAMIANDÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "7", "27/02/2003", "19847,22508", "EMBERA"],
                                ["CAÑAVERALES-ANTADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "3", "7/02/1995", "4997,6981", "EMBERA KATÍO"],
                                ["EL SALADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "22", "26/03/1990", "6101,896097", "EMBERA KATÍO"],
                                ["MAIZ BLANCO", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "69", "17/08/2006", "127,722297", "EPERARA SIAPIDARA"],
                                ["WANCHIRADO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "71", "2/12/1992", "10764,2388", "EMBERA KATÍO"],
                                ["GEGENADÓ", "LEGALIZACIÓN DECRETO 107", "ACUERDO", "217", "23/12/2010", "2393,166867", "EMBERA"],
                                ["SAN JOSÉ AMIA DE PATO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "39", "30/11/1998", "812,489168", "EMBERA KATÍO"],
                                ["PUERTO ALEGRE Y LA DIVISA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "42", "21/07/1988", "21791,19756", "EMBERA KATÍO"],
                                ["CORIBÍ BEDADÓ", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "3", "10/04/2003", "105,520185", "EMBERA KATÍO"],
                                ["POLINES", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "60", "19/08/1987", "3388,677744", "EMBERA KATÍO"],
                                ["DAI UMADAMIA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "66", "26/07/2018", "111,035126", "EMBERA CHAMI"],
                                ["KEJUAMBi FELICIANA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "31", "10/04/2003", "1839,719243", "AWA"],
                                ["CHAGUI CHIMBUZA VEGAS Y OTROS", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "3", "27/02/2002", "3473,518405", "AWÁ"],
                                ["RESGUARDO INDÍGENA CHIMBAGAL Y TAJA", "ANCESTRALES DECRETO 2333", "RESOLUCIÓ", "365", "5/05/2015", "385,135384", "AWÁ"],
                                ["MONZHOMANDO", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "1", "22/07/2003", "187,334724", "EMBERA KATIO"],
                                ["NAVERA DRUA", "LEGALIZACIÓN DECRETO 107", "RESOLUCIÓ", "26", "10/12/2002", "320,753163", "EMBERA CHAMI"],
                                ["NUEVA BELLAVISTA Y PARTIDERO", "LEGALIZACIÓN DECRETO 1071", "RESOLUCIÓN", "374", "21/09/2015", "45,1151", "EPERARA SIAPIDARA"],
                                ["ARQUIA", "LEGALIZACIÓN DECRETO 1071", "RESOLUCIÓN", "100", "27/07/1982", "2394,431555", "Cuna"]



                            ];
                            const customDataTable = document.getElementById('customDataTable');
                            const customSearchInput = document.getElementById('customSearchInput');
                            const customShowEntriesSelect = document.getElementById('customShowEntries');
                            const customPrevPageBtn = document.getElementById('customPrevPageBtn');
                            const customNextPageBtn = document.getElementById('customNextPageBtn');
                            const customPaginationInfo = document.getElementById('customPaginationInfo');
                            let customRegistrosPorPagina = parseInt(customShowEntriesSelect.value);
                            let customPaginaActual = 1;
                            let customSortColumnIndex = -1; // Columna de orden inicial
                            let customSortDirection = 1; // 1 para ascendente, -1 para descendente

                            function customMostrarTabla(registros) {
                                const customTotalPaginas = Math.ceil(registros.length / customRegistrosPorPagina);
                                const customInicio = (customPaginaActual - 1) * customRegistrosPorPagina;
                                const customFin = customInicio + customRegistrosPorPagina;

                                // Limpia la tabla
                                customDataTable.querySelector('tbody').innerHTML = '';

                                // Ordenar los registros en función de la columna seleccionada
                                if (customSortColumnIndex >= 0) {
                                    registros.sort((a, b) => {
                                        return a[customSortColumnIndex].localeCompare(b[customSortColumnIndex]) * customSortDirection;
                                    });
                                }

                                for (let i = customInicio; i < customFin; i++) {
                                    if (i >= registros.length) break;

                                    let tr = document.createElement('tr');
                                    for (let j = 0; j < registros[i].length; j++) {
                                        let td = document.createElement('td');
                                        td.textContent = registros[i][j];
                                        tr.appendChild(td);
                                    }
                                    customDataTable.querySelector('tbody').appendChild(tr);
                                }

                                customPaginationInfo.textContent = `Mostrando ${customInicio + 1} a ${Math.min(customFin, registros.length)} de ${registros.length} entradas`;
                            }

                            function customFiltrarRegistros() {
                                const customFiltro = customSearchInput.value.toLowerCase();
                                const customRegistrosFiltrados = customDatosEjemplo.filter(registro => {
                                    return registro.some(dato => dato.toLowerCase().includes(customFiltro));
                                });

                                customMostrarTabla(customRegistrosFiltrados);
                            }

                            function customCambiarShowEntries() {
                                customRegistrosPorPagina = parseInt(customShowEntriesSelect.value);
                                customMostrarTabla(customDatosEjemplo);
                            }

                            function customGoToPrevPage() {
                                if (customPaginaActual > 1) {
                                    customPaginaActual--;
                                    customMostrarTabla(customDatosEjemplo);
                                }
                            }

                            function customGoToNextPage() {
                                const customTotalPaginas = Math.ceil(customDatosEjemplo.length / customRegistrosPorPagina);
                                if (customPaginaActual < customTotalPaginas) {
                                    customPaginaActual++;
                                    customMostrarTabla(customDatosEjemplo);
                                }
                            }

                            function customHandleColumnSort(event) {
                                const customColumnIndex = event.target.getAttribute('data-sort');

                                if (customColumnIndex === customSortColumnIndex.toString()) {
                                    // Cambiar la dirección de orden
                                    customSortDirection *= -1;
                                } else {
                                    // Ordenar por la columna seleccionada de forma ascendente
                                    customSortColumnIndex = parseInt(customColumnIndex);
                                    customSortDirection = 1;
                                }

                                customMostrarTabla(customDatosEjemplo);
                            }

                            customShowEntriesSelect.addEventListener('change', customCambiarShowEntries);
                            customSearchInput.addEventListener('input', customFiltrarRegistros);
                            customPrevPageBtn.addEventListener('click', customGoToPrevPage);
                            customNextPageBtn.addEventListener('click', customGoToNextPage);

                            // Escuchar eventos de clic en los encabezados de columna para ordenar
                            const customColumnHeaders = document.querySelectorAll('#customDataTable th.cursor-pointer');
                            customColumnHeaders.forEach(header => header.addEventListener('click', customHandleColumnSort));

                            // Mostrar la tabla inicialmente
                            customMostrarTabla(customDatosEjemplo);
                        </script>

                </div>
            </div>
        </div>
</div>

</x-app-layout>

<x-app-layout>

    <div class="w-full">

        <div class="imagen-title"
            style="background-image:url(https://iiap.org.co/images/85ecc723b087d352bbf4a5a2f32aaf57)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">MISIÓN                </h1>
                   <nav class="flex my-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house"></i> <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">


                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href="/"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                                Inicio /
                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href="/nuestros-planes"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                                Misión
                            </a>
                        </li>

                    </ol>
                </nav>
            </div>
        </div>
        <div class=" bg-white container py-8 mb-8 mx-7 w-full justify-center flex flex-col md:flex-row items-center">

            <p class="w-full  max-w-[500px] min-w-[400px] text-lg text-justify m-4 ">
                La misión del SIAT-PC es integrar y fortalecer saberes, capacidades de entidades, grupos y personas mediante una red que promueva la producción,
                intercambio mantenimiento y acceso a la información ambiental pertinente, confiable y oportuna que contribuya a la generación de conocimiento para el ordenamiento ambiental territorial, el mejoramiento de la calidad de vida y el desarrollo sostenible del Pacífico colombiano.

            </p>

            <div>

            </div>

            <div class="w-full md:w-[40%] flex justify-center">
                <img class="w-full rounded-full object-cover " src="{{asset('images/siembra.jpg') }}" alt="foto">

            </div>

        </div>
    </div>

    <div class="container mx-auto p-4">
        <input type="text" id="searchInput" class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg" placeholder="Buscar...">
        <table id="dataTable" class="w-full">
            <thead>
                <tr class="bg-green-500">
                    <th class="px-4 py-2">CODIGÓ DEPARTAMENTO.</th>
                    <th class="px-4 py-2">DEPARTAMENTO</th>
                    <th class="px-4 py-2">CÓDIGO MUNICIPIO</th>
                    <th class="px-4 py-2">MUNICIPIO</th>
                    <th class="px-4 py-2">ÁREA (ha)</th>
                    <th class="px-4 py-2">ALTITUD (msnm)</th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="flex justify-between mt-4">
            <div>
                <label for="showEntries">Mostrar entradas:</label>
                <select id="showEntries" class="px-2 py-1 border border-gray-300 rounded-md">
                    <option value="10">10</option>
                    <option value="20" selected>20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div id="paginationInfo" class="text-gray-600"></div>
        </div>
    </div>

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

        function mostrarTabla(registros) {
            const totalPaginas = Math.ceil(registros.length / registrosPorPagina);
            const inicio = (paginaActual - 1) * registrosPorPagina;
            const fin = inicio + registrosPorPagina;

            // Limpia la tabla
            tabla.querySelector('tbody').innerHTML = '';

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

        showEntriesSelect.addEventListener('change', cambiarShowEntries);
        searchInput.addEventListener('input', filtrarRegistros);
        prevPageBtn.addEventListener('click', goToPrevPage);
        nextPageBtn.addEventListener('click', goToNextPage);

        // Mostrar la tabla inicialmente
        mostrarTabla(datosEjemplo);
    </script>







</x-app-layout>

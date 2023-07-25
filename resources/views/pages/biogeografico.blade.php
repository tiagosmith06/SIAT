<x-app-layout>
    <div class="min-h-screen">
        <div class="imagen-title2 "
            style="background-image:url(https://iiap.org.co/images/85ecc723b087d352bbf4a5a2f32aaf57)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">CHOCÓ BIOGEOGRAFICO    </h1>

                <nav class="flex my-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house"></i> <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">


                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href="/"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-blue-600">

                                Inicio /
                            </a>
                        </li>

                        <li class="inline-flex items-center">

                            <a href="/biogeografico"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-blue-600">

                               Chocó Biogeografico/
                            </a>
                        </li>




                    </ol>


                </nav>
            </div>

        </div>
        <br>
        <div class="container mx-auto">
            <input type="text" id="searchInput" class="border rounded px-4 py-2 w-64 mb-4" placeholder="Buscar municipio">
            <table class="w-full table-auto">
              <thead>
                <tr class="bg-green-800 text-white">
                  <th class="px-4 py-2 cursor-pointer" onclick="sortTable(0)">
                    Nombre del municipio
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                  </th>
                  <th class="px-4 py-2 cursor-pointer" onclick="sortTable(1)">
                    Área
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                  </th>
                  <th class="px-4 py-2 cursor-pointer" onclick="sortTable(2)">
                    Centros poblados
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                  </th>
                  <th class="px-4 py-2 cursor-pointer" onclick="sortTable(3)">
                    Áreas protegidas
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                    <a href="javascript:void(0)" class="ml-2">
                      <svg class="w-4 h-4 inline-block transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                      </svg>
                    </a>
                  </th>
                </tr>
              </thead>
              <tbody id="tableBody">
                <tr>
                  <td class="border px-4 py-2">Quibdó</td>
                  <td class="border px-4 py-2">3,001 km²</td>
                  <td class="border px-4 py-2">12</td>
                  <td class="border px-4 py-2">Parque Nacional Natural Utría</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2">Medio Atrato</td>
                  <td class="border px-4 py-2">5,712 km²</td>
                  <td class="border px-4 py-2">8</td>
                  <td class="border px-4 py-2">Reserva Forestal Serranía del Baudó</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2">Riosucio</td>
                  <td class="border px-4 py-2">2,500 km²</td>
                  <td class="border px-4 py-2">7</td>
                  <td class="border px-4 py-2">-</td>
                </tr>
                <!-- Agregar más filas para otros municipios -->
                <tr>
                  <td class="border px-4 py-2">Nuquí</td>
                  <td class="border px-4 py-2">1,981 km²</td>
                  <td class="border px-4 py-2">5</td>
                  <td class="border px-4 py-2">Parque Nacional Natural Ensenada de Utría</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2">Bagadó</td>
                  <td class="border px-4 py-2">2,340 km²</td>
                  <td class="border px-4 py-2">4</td>
                  <td class="border px-4 py-2">-</td>
                </tr>
                <tr>
                  <td class="border px-4 py-2">Tadó</td>
                  <td class="border px-4 py-2">1,830 km²</td>
                  <td class="border px-4 py-2">6</td>
                  <td class="border px-4 py-2">Reserva Forestal Río Ñambí</td>
                </tr>
                <!-- Agregar más filas para otros municipios -->
                <!-- Aquí van los 30 municipios con sus datos -->
              </tbody>
            </table>
          </div>

          <script>
            const searchInput = document.getElementById('searchInput');
            const tableBody = document.getElementById('tableBody');
            let sortOrder = 1;

            function sortTable(columnIndex) {
              const rows = Array.from(tableBody.children);
              rows.sort((a, b) => {
                const aValue = a.children[columnIndex].innerText.toLowerCase();
                const bValue = b.children[columnIndex].innerText.toLowerCase();

                if (aValue < bValue) return -1 * sortOrder;
                if (aValue > bValue) return 1 * sortOrder;
                return 0;
              });

              tableBody.innerHTML = '';
              rows.forEach((row) => {
                tableBody.appendChild(row);
              });

              sortOrder = -sortOrder;
            }

            searchInput.addEventListener('input', () => {
              const searchText = searchInput.value.toLowerCase();

              Array.from(tableBody.children).forEach((row) => {
                const municipio = row.children[0].innerText.toLowerCase();
                if (municipio.includes(searchText)) {
                  row.style.display = 'table-row';
                } else {
                  row.style.display = 'none';
                }
              });
            });
          </script>
</x-app-layout>

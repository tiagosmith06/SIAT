<x-app-layout>
    <div class="min-h-screen">
      <div class="imagen-title2" style="background-image:url(https://iiap.org.co/images/85ecc723b087d352bbf4a5a2f32aaf57)">
        <div class="cover pl-[50px]">
          <h1 class="font-extrabold text-my_blue text-3xl">ATENCIÓN INTEGRAL</h1>

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
                <a href="/comunicacion"
                  class="inline-flex items-center text-sm font-medium text-white hover:text-blue-600">
                  Atencion Integral
                </a>
              </li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="container py-8 my-0 mx-auto max-w-6xl">
        <h1 class="text-2xl text-center font-medium mb-4">GESTIÓN DOCUMENTAL</h1>

        <div class="flex flex-col gap-4">
          <!-- Botón de búsqueda -->
          <div class="mb-4">
            <input type="text" id="searchInput" class="border rounded px-4 py-2 w-64" placeholder="Buscar archivo...">
            <button class="btn-search bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="filtrarPorBusqueda()">Buscar</button>
          </div>

          <!-- Repositorio de archivos -->
          <div class="grid grid-cols-3 gap-4" id="archivoContainer">
            <!-- Archivos se agregarán aquí -->
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>

  <script>
    // Datos de ejemplo para los archivos y sus categorías
    const archivos = [
      { nombre: 'Archivo 1', categoria: 'categoria1', url: 'chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/https://siatpc.co/documentos/avances/cepfrontino.pdf' },
      { nombre: 'Archivo 2', categoria: 'categoria2', url: '' },
      { nombre: 'Archivo 3', categoria: 'categoria3', url: '' },
      { nombre: 'Archivo 4', categoria: 'categoria1', url: '' },
      { nombre: 'Archivo 5', categoria: 'categoria2', url: 'f' },
      { nombre: 'Archivo 6', categoria: 'categoria3', url: '' },
      // Agregar más archivos con sus categorías
    ];

    // Función para mostrar los archivos en el contenedor
    function mostrarArchivos(archivos) {
      const archivoContainer = document.getElementById('archivoContainer');
      archivoContainer.innerHTML = '';

      archivos.forEach((archivo) => {
        const archivoCard = `
          <div class="p-6 text-white border relative border-gray-200 rounded-lg shadow w-full h-[15rem] flex justify-center items-center flex-col bg-slate-500">
            <a href="${archivo.url}" target="_blank" class="mb-2 text-2xl font-bold tracking-tight">${archivo.nombre}</a>
            <p class="mb-3 font-normal">${archivo.categoria}</p>
          </div>
        `;
        archivoContainer.innerHTML += archivoCard;
      });
    }

    // Función para filtrar archivos por categoría
    function filtrarArchivosPorCategoria(categoria) {
      if (categoria === 'todo') {
        mostrarArchivos(archivos);
      } else {
        const archivosFiltrados = archivos.filter((archivo) => archivo.categoria === categoria);
        mostrarArchivos(archivosFiltrados);
      }
    }

    // Función para filtrar archivos por búsqueda
    function filtrarPorBusqueda() {
      const searchText = document.getElementById('searchInput').value.toLowerCase();

      const archivosFiltrados = archivos.filter((archivo) => {
        const nombre = archivo.nombre.toLowerCase();
        return nombre.includes(searchText);
      });

      mostrarArchivos(archivosFiltrados);
    }

    // Manejo del clic en los botones de categoría
    const btnCategorias = document.querySelectorAll('.btn-category');
    btnCategorias.forEach((btn) => {
      btn.addEventListener('click', () => {
        const categoria = btn.getAttribute('data-category');
        filtrarArchivosPorCategoria(categoria);
      });
    });

    // Mostrar todos los archivos al cargar la página
    mostrarArchivos(archivos);
  </script>
<

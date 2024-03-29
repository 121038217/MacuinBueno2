<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>cliente Inicio </title>
  <link rel="stylesheet" href="/build/app.css">
  <style>
  
  </style>
</head>
<body class="bg-gray-300">
<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
        <img src="ruta/a/tu/imagen.svg" alt="Macuin Dashboards" class="h-6 w-6 mr-2">
        <a href="cliente_inicio" class="-m-1.5 p-1.5 font-bold text-xl"> Macuin Dashboards
        </a>
    </div>

    <div class="flex flex-col justify-start items-start py-30 px-30 mt-4">
        <div class="flex justify-end">
          <a href="#" class="flex items-center p-2 py-30 px-10 text-gray-700 ">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          </a>
        </div>
      </div>

  <div class="relative">
    <button id="menuButton" class="flex-col flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 bg-stone-100 hover:bg-stone-300 transition-colors duration-300 rounded-lg" aria-expanded="false">
        <div>¡Hola!</div>
        <div>Nombre del cliente</div>
        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
    </button>
    <ul id="menu" class="absolute hidden top-0 left-0 w-36 py-1 bg-white shadow-md rounded-md z-10 origin-top-right focus:outline-none">
        <li class="px-4 py-2 hover:bg-gray-100 rounded-md">
            <a href="cliente_perfil" class="text-sm text-gray-700">Perfil</a>
        </li>
        <li class="px-4 py-2 hover:bg-gray-100 rounded-md">
            <a href="cliente_Editarperfil" class="text-sm text-gray-700">Editar Perfil</a>
        </li>
    </ul>
</div>
  </nav>
  
  <div class="bg-blue-600 text-white px-4 py-2 text-center">
    Tickets
  </div>

</header> <!--Final del encabezado-->

 <!--Botones-->
 <div class="flex flex-col justify-start items-start py-30 px-10 mt-48"> 
    <a href="cliente_solicitarticker" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
      Solicitar ticket
    </a>
  
    <a href="cliente_consultarticket" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
      Consultar ticket
    </a>
</div> 

 <!--Tabla-->
 <div class="flex flex-col justify-center items-end ">
  <div class="max-w-7xl mx-auto sm:px-9 lg:px-11">
    <table class="table-auto w-full text-sm text-left" style="width: 100px;" >
      <thead class="bg-gray-50 ">
        <tr>
          <th class="px-4 py-2">No. Ticket</th>
          <th class="px-4 py-2">Autor</th>
          <th class="px-4 py-2">Departamento</th>
          <th class="px-4 py-2">Fecha</th>
          <th class="px-4 py-2">Calificación</th>
          <th class="px-4 py-2">Detalle</th>
          <th class="px-4 py-2">Estatus</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <tr>
          <td class="px-4 py-2 border-b">123456</td>
          <td class="px-4 py-2 border-b">Juan Pérez</td>
          <td class="px-4 py-2 border-b">Soporte técnico</td>
          <td class="px-4 py-2 border-b">2023-11-14</td>
          <td class="px-4 py-2 border-b">
            <span class="inline-flex items-center">
              <svg class="h-4 w-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v6.805c0 .969-.764 1.733-1.733 1.733h-3.462a1 1 0 00-.95-.69l-1.07-3.292a1 1 0 00-1.902 0l-1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v6.805c0 .969-.764 1.733-1.733 1.733h-3.462a1 1 0 00-.95-.69l-1.07-3.292a1 1 0 00-1.902 0l-1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v1.732c0 .969-.764 1.733-1.733 1.733H2.764C1.797 20 1 19.236 1 18.267V8.267C1 7.298 1.797 6.531 2.764 6.531h3.462a1 1 0 00.95-.69l1.07-3.292C8.147 2.927 8.748 2 9.049 2.927z"/></svg>
            </span>
            <span class="ml-2">4</span>
          </td>
          <td class="px-4 py-2 border-b">Mi computadora no enciende</td>
          <td class="px-4 py-2 border-b">Pendiente</td>
        </tr>
        </tbody>
    </table>
  </div>  
</div>
  

<script>
    const menuButton = document.getElementById('menuButton');
    const menu = document.getElementById('menu');

    menuButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>


<script>
  // Variables para el botón del perfil y el menú de opciones
  const profileMenuButton = document.getElementById('profileMenu');
  const profileMenuOptions = document.getElementById('profileMenuOptions');

  // Evento de clic en el botón del perfil
  profileMenuButton.addEventListener('click', () => {
    // Alternar la visibilidad del menú de opciones
    profileMenuOptions.classList.toggle('hidden');
  });

  // Evento de clic en cualquier parte del documento
  document.addEventListener('click', (event) => {
    const isClickInsideMenu = profileMenuButton.contains(event.target) || profileMenuOptions.contains(event.target);
    if (!isClickInsideMenu) {
      // Cerrar el menú si el clic no fue dentro del menú o en el botón del perfil
      profileMenuOptions.classList.add('hidden');
    }
  });

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>

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
          <a href="#" class="flex items-center p-2 py-30 px-10 text-gray-700">
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

<div class="flex justify-center">
    <div class="flex items-center mr-4">
      <svg class="h-20 w-15 text-black-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </div>
    <div class="w-72 mt-16">
      <p>John Doe</p>
      <p>1985-06-21</p>
      <p>Ventas</p>
      <p>johndoe@example.com</p>
    </div>
  </div>

  


  <script>
    const menuButton = document.getElementById('menuButton');
    const menu = document.getElementById('menu');

    menuButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>



@vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>

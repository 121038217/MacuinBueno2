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
        <a href="#" class="-m-1.5 p-1.5 font-bold text-xl"> Macuin Dashboards
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

      <div class="hidden lg:flex lg:gap-x-12">
        <div class="relative">
        <button type="button" class="flex-col flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 bg-stone-100 hover:bg-stone-300 transition-colors duration-300 rounded-lg " aria-expanded="false">
            <div>Cliente</div>
            <div> Nombre del cliente</div>
            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
          <ul class="absolute hidden top-0 left-0 w-full py-1 bg-white shadow-md rounded-md z-10 origin-top-right focus:outline-none">
            <li class="px-4 py-2 hover:bg-gray-100 rounded-md">
              <a href="#" class="text-sm text-gray-700">Editar</a>
            </li>
          </ul>
        </div>
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
    <form class="w-72 mt-16">
      <div class="space-y-4">
      <label for="full_name" class="block text-sm font-medium leading-6 text-gray-700">Nombre completo</label>
      <input type="text" name="full_name" id="full_name" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
  
      <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-700">Fecha de nacimiento</label>
      <input type="date" name="date_of_birth" id="date_of_birth" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
  
      <label for="sales" class="block text-sm font-medium leading-6 text-gray-700">Ventas</label>
      <input type="number" name="sales" id="sales" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
  
      <label for="email" class="block text-sm font-medium leading-6 text-gray-700">Correo electrónico</label>
      <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
  
      <label for="password" class="block text-sm font-medium leading-6 text-gray-700">Contraseña</label>
      <input type="password" name="password" id="password" autocomplete="current-password" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
  
      <div class="flex items-center justify-end mt-4 gap-x-2">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-500 hover:text-gray-700 transition-colors duration-300">Cancelar</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition-colors duration-300 focus:visible:outline focus:visible:outline-2 focus:visible:outline-offset-2 focus:visible:outline-indigo-600">Editar</button>
      </div>
    </div>
</div>  
</form>
</div> 

@vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>
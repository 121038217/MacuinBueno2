<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>cliente Inicio </title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla')
  @section('contenido')
  
</head>
<body class="bg-gray-300">

 <!--Botones-->
 <div class="flex flex-col justify-start items-start py-30 px-10 mt-48">
    <div class="mb-5"> 
      <a href="cliente_solicitarticker" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300" onclick="mostrarTabla()">
        Solicitar ticket
      </a>
    </div>
    <div class="mt-5">
      <a href="cliente_consultarticket" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
        Consultar ticket
      </a>
    </div>
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
          <td class="px-4 py-2 border-b">121678</td>
          <td class="px-4 py-2 border-b">José Luis Pérez</td>
          <td class="px-4 py-2 border-b">Compras</td>
          <td class="px-4 py-2 border-b">12/01/2024</td>
          <td class="px-4 py-2 border-b">
            <span class="inline-flex items-center">
              <svg class="h-4 w-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v6.805c0 .969-.764 1.733-1.733 1.733h-3.462a1 1 0 00-.95-.69l-1.07-3.292a1 1 0 00-1.902 0l-1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v6.805c0 .969-.764 1.733-1.733 1.733h-3.462a1 1 0 00-.95-.69l-1.07-3.292a1 1 0 00-1.902 0l-1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v1.732c0 .969-.764 1.733-1.733 1.733H2.764C1.797 20 1 19.236 1 18.267V8.267C1 7.298 1.797 6.531 2.764 6.531h3.462a1 1 0 00.95-.69l1.07-3.292C8.147 2.927 8.748 2 9.049 2.927z"/></svg>
            </span>
            <span class="ml-2">4</span>
          </td>
          <td class="px-4 py-2 border-b">Mi computadora no enciende</td>
          <td class="px-4 py-2 border-b">Asignado</td>
        </tr>
        </tbody>
    </table>
  </div>  
</div>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @endsection
</body>
</html>

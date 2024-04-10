<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>cliente Solicitar ticket</title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla')
  @section('contenido')

</head>
<body>

 <!--Botones-->
 <div class="flex justify-center items-center mt-8 space-x-10">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">
      Solicitar ticket
    </button>
    <a href="cliente_consultarticket" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ml-4">
      Consultar ticket
    </a>
 </div>

<div class="flex justify-center">
    <div class="border-collapse border border-gray-200 rounded-lg overflow-hidden max-w-7xl mx-auto" id="ticketTable">
    <table>
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2">Autor</th>
          <th class="px-4 py-2">Departamentos</th>
          <th class="px-4 py-2">Fecha</th>
          <th class="px-4 py-2">Clasificación</th>
          <th class="px-4 py-2">Detalle</th>
          <th class="px-4 py-2">Estatus</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="px-4 py-2">Autor 1</td>
          <td class="px-4 py-2">Departamento 1</td>
          <td class="px-4 py-2">2024-03-12</td>
          <td class="px-4 py-2">
          <span class="inline-flex items-center">
          <svg class="h-4 w-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v6.805c0 .969-.764 1.733-1.733 1.733h-3.462a1 1 0 00-.95-.69l-1.07-3.292a1 1 0 00-1.902 0l-1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v6.805c0 .969-.764 1.733-1.733 1.733h-3.462a1 1 0 00-.95-.69l-1.07-3.292a1 1 0 00-1.902 0l-1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.733.764 1.733 1.733v1.732c0 .969-.764 1.733-1.733 1.733H2.764C1.797 20 1 19.236 1 18.267V8.267C1 7.298 1.797 6.531 2.764 6.531h3.462a1 1 0 00.95-.69l1.07-3.292C8.147 2.927 8.748 2 9.049 2.927z"/></svg>
          </td>
          <td class="px-4 py-2">Detalle 1</td>
          <td class="px-4 py-2">Estatus 1</td>
        </tr>
        <tr>
          
        </tr>
      </tbody>
    </table>

    <button onclick="guardarCambios()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 transition-colors duration-300">
    Guardar
    </button>

  </div>
</div>

<script>
  function guardarCambios() {
    // Aquí puedes añadir tu lógica para guardar los cambios
    // Luego, muestra la alerta
    Swal.fire({
      icon: 'success',
      title: 'Cambios guardados',
      showConfirmButton: false,
      timer: 1500
    });
  }
</script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endsection
</body>
</html>

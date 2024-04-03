<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>auxiliar control tickets </title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla_auxiliar')
  @section('contenido')
  
</head>
<body class="p-4">
    <div class="mt-20 mx-auto mb-24 mr-10 ml-10">
        <h1 class="text-center text-3xl font-bold mb-10">Control Tickets</h1>
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Ticket</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Autor</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departamento</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Clasificación</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detalle</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estatus</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-2 py-2 whitespace-nowrap">001</td>
                        <td class="px-2 py-2 whitespace-nowrap">Juan Pérez</td>
                        <td class="px-2 py-2 whitespace-nowrap">Ventas</td>
                        <td class="px-2 py-2 whitespace-nowrap">2024-04-03</td>
                        <td class="px-2 py-2 whitespace-nowrap">Problemas de red</td>
                        <td class="px-2 py-2 whitespace-nowrap">Conexión intermitente</td>
                        <td class="px-2 py-2 whitespace-nowrap">
                            <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                <option value="completado">Completado</option>
                                <option value="asignado">Asignado</option>
                                <option value="en_proceso">En proceso</option>
                                <option value="nunca_solucionado">Nunca solucionado</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="mt-10 text-center">
        <a href="/auxiliar_inicio" class="py-2 px-4 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 ml-4">Cancelar</a>
        <button type="button" id="guardarButton" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Guardar</button>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.getElementById('guardarButton').addEventListener('click', function() {
            swal("¡Guardado!", "Tu acción ha sido guardada exitosamente", "success");
        });
    </script>


</body>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@endsection
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>auxiliar Reportes </title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla_auxiliar')
  @section('contenido')
  
</head>
<body>

    <h1 class="text-center text-2xl font-bold mb-10 mt-20">Generar Reporte</h1>

    <div class="flex justify-center">
        <button id="generarReporte" class="py-2 px-4 bg-blue-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Generar Reporte</button>
    </div>

    <div id="reporte" class="mt-10 hidden">
        <table id="tablaReporte" class="w-full table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estatus</th>
                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departamento</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            </tbody>
        </table>

        <div class="flex justify-center mt-4">
            <a id="descargarReporte" class="py-2 px-4 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" download>Descargar Reporte</a>
            <a href="/auxiliar_inicio" class="py-2 px-4  bg-blue-600 text-white rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 ml-4">Cancelar</a>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.getElementById('generarReporte').addEventListener('click', function() {
            // Obtener los datos de los tickets 
            var tickets = obtenerDatosTickets();

            // Verificar si hay tickets para generar el reporte
            if (tickets.length > 0) {
                // Generar el reporte
                generarReporte(tickets);
            } else {
                // Mostrar mensaje si no hay tickets
                swal("Error", "No hay tickets para generar el reporte.", "error");
            }
        });

        // Función para obtener los datos de los tickets 
        function obtenerDatosTickets() {
            // Ejemplo de datos de tickets
            var tickets = [
                { estatus: 'Completado', fecha: '2024-04-03', departamento: 'Ventas' },
                { estatus: 'Asignado', fecha: '2024-04-04', departamento: 'Soporte Técnico' },
                { estatus: 'En Proceso', fecha: '2024-04-05', departamento: 'Soporte Técnico' },
                { estatus: 'Nunca Solucionado', fecha: '2024-04-06', departamento: 'Ventas' },
                { estatus: 'Cancelado', fecha: '2024-04-07', departamento: 'Recursos Humanos' }
            ];
            return tickets;
        }

        // Función para generar el reporte
        function generarReporte(tickets) {
            var tablaReporte = document.getElementById('tablaReporte').getElementsByTagName('tbody')[0];
            tablaReporte.innerHTML = '';

            tickets.forEach(function(ticket) {
                var fila = `<tr>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.estatus}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.fecha}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.departamento}</td>
                            </tr>`;
                tablaReporte.innerHTML += fila;
            });

            // Mostrar el reporte
            document.getElementById('reporte').classList.remove('hidden');

            // generar contenido del archivo CSV
            var contenidoArchivo = 'Estatus, Fecha, Departamento\n';
            tickets.forEach(function(ticket) {
                contenidoArchivo += `${ticket.estatus}, ${ticket.fecha}, ${ticket.departamento}\n`;
            });

            // enlace de descarga
            var enlaceDescarga = document.getElementById('descargarReporte');
            enlaceDescarga.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(contenidoArchivo);
        }
    </script>

</body>


@vite(['resources/css/app.css', 'resources/js/app.js'])

@endsection
</body>
</html>

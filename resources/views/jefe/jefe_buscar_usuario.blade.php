<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Buscar Usuarios</title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla_auxiliar')
  @section('contenido')

</head>

<body class="p-4">
<div class="flex justify-center mt-3">
        <div class="flex space-x-4">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition-colors duration-300">Agregar Cliente</button>
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition-colors duration-300">Agregar Soporte</button>
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition-colors duration-300">Regresar</button>
        </div>
    </div>
    <h1 class="text-center text-2xl font-bold mb-10 mt-20">Buscar Usuarios</h1>
    <div class="mt-20 mx-auto mb-24 ml-10 mr-10">
        <div class="flex justify-center">
                <label for="instrucciones" class="block text-medium font-medium text-gray-700">Ingrese cualquiera de los campos para buscar coincidencias</label>
        </div>
        <div class="flex justify-center mt-4">
            <div class="mr-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="departamento" class="block w-40 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mr-4">
                <label for="tipo_de_usuario" class="block text-sm font-medium text-gray-700">Tipo de Usuario</label>
                <input type="text" id="tipo_de_usuario" name="departamento" class="block w-40 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mr-4">
                <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                <input type="text" id="departamento" name="departamento" class="block w-40 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mr-4">
                <label for="correo" class="block text-sm font-medium text-gray-700">Correo</label>
                <input type="text" id="correo" name="departamento" class="block w-40 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mr-4">
                <label for="estatus" class="block text-sm font-medium text-gray-700">Estatus</label>
                <input type="text" id="estatus" name="departamento" class="block w-40 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <button id="buscarFechaDepartamento" class="py-2 px-4 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Buscar</button>
        </div>

        <div class="mt-10">
            <table id="tablaTickets" class="w-full table-auto hidden">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo de Usuario</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departamento</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                        <th class="px-2 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estatus</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                </tbody>
            </table>
            <button id="editar_usuario" class="py-2 px-4 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 button-auto hidden">Editar Usuario</button>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // Función para buscar por estatus
        document.getElementById('buscarEstatus').addEventListener('click', function() {
            var estatusSeleccionado = document.getElementById('estatus').value;
            var ticketsFiltrados = [];
            // Generar un ejemplo de ticket para cada estatus
            switch (estatusSeleccionado) {
                case 'completado':
                    ticketsFiltrados.push({ numero: '001', autor: 'Juan Pérez', departamento: 'Ventas', fecha: '2024-04-03', clasificacion: 'Problemas de red', detalle: 'Conexión intermitente', estatus: 'Completado' });
                    break;
                case 'asignado':
                    ticketsFiltrados.push({ numero: '002', autor: 'María Rodríguez', departamento: 'Soporte Técnico', fecha: '2024-04-04', clasificacion: 'Problemas de software', detalle: 'Error al iniciar sesión', estatus: 'Asignado' });
                    break;
                case 'en_proceso':
                    ticketsFiltrados.push({ numero: '003', autor: 'Pedro González', departamento: 'Soporte Técnico', fecha: '2024-04-05', clasificacion: 'Problemas de red', detalle: 'No hay conexión', estatus: 'En Proceso' });
                    break;
                case 'nunca_solucionado':
                    ticketsFiltrados.push({ numero: '004', autor: 'Ana Martínez', departamento: 'Ventas', fecha: '2024-04-06', clasificacion: 'Problemas de hardware', detalle: 'Pantalla rota', estatus: 'Nunca Solucionado' });
                    break;
                case 'cancelado':
                    ticketsFiltrados.push({ numero: '005', autor: 'Carlos López', departamento: 'Recursos Humanos', fecha: '2024-04-07', clasificacion: 'Problemas de acceso', detalle: 'No puede iniciar sesión', estatus: 'Cancelado' });
                    break;
                default:
                    break;
            }
            // Actualizar la tabla con los tickets filtrados
            actualizarTabla(ticketsFiltrados);
        });

        // Función para buscar por fecha y departamento
        document.getElementById('buscarFechaDepartamento').addEventListener('click', function() {
            var fechaSeleccionada = document.getElementById('fecha').value;
            var departamentoSeleccionado = document.getElementById('departamento').value;
            // Verificar que ambos campos estén completos
            if (fechaSeleccionada !== '' && departamentoSeleccionado !== '') {
                var ticketsFiltrados = [];
                // Generar un ejemplo de ticket con la fecha y departamento seleccionados
                ticketsFiltrados.push({ numero: '001', autor: 'Juan Pérez', departamento: departamentoSeleccionado, fecha: fechaSeleccionada, clasificacion: 'Problemas de red', detalle: 'Conexión intermitente', estatus: 'Completado' });
                // Actualizar la tabla con los tickets filtrados
                actualizarTabla(ticketsFiltrados);
            } else {
                // Mostrar mensaje de error si algún campo está vacío
                swal("Error", "Por favor completa tanto la fecha como el departamento.", "error");
            }
        });

        // Función para actualizar la tabla con los tickets filtrados
        function actualizarTabla(tickets) {
            var tablaTickets = document.getElementById('tablaTickets').getElementsByTagName('tbody')[0];
            tablaTickets.innerHTML = '';
            tickets.forEach(function(ticket) {
                var fila = `<tr>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.numero}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.autor}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.departamento}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.fecha}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.clasificacion}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.detalle}</td>
                                <td class="px-2 py-2 whitespace-nowrap">${ticket.estatus}</td>
                            </tr>`;
                tablaTickets.innerHTML += fila;
            });
            document.getElementById('tablaTickets').classList.remove('hidden');
        }
    </script>

</body>


@vite(['resources/css/app.css', 'resources/js/app.js'])

@endsection
</body>
</html>

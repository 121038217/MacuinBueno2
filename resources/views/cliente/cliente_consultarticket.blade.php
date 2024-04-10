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
<body>

<!--Botones-->
<div class="flex justify-center items-center mt-8 space-x-10  mb-5">
    <a href="cliente_solicitarticker" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
      Solicitar ticket
    </a>
    <a href="cliente_consultarticket" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
      Consultar ticket
    </a>
</div>
{{-- mini tabla --}}
<div class="flex justify-center">
    <table class="table-auto w-full text-sm text-left" style="width: 50px;">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-2">Departamento</th>
                <th class="px-4 py-2">Fecha</th>
                <th class="px-4 py-2">Estatus</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td class="px-4 py-2 border-b">Sistemas</td>
                <td class="px-4 py-2 border-b">12/03/2024</td>
                <td class="px-4 py-2 border-b text-center">
                    <div class="relative inline-block text-left">
                        <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Completado</option>
                            <option>Asignado</option>
                            <option>En proceso</option>
                            <option>Nunca solicitado</option>
                            <option>Cancelado</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 6.707a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

              </button>
              <ul
                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                aria-labelledby="dropdownMenuButton1"
                data-twe-dropdown-menu-ref>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="#"
                    data-twe-dropdown-item-ref
                    >Action</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="#"
                    data-twe-dropdown-item-ref
                    >Another action</a
                  >
                </li>
                <li>
                  <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="#"
                    data-twe-dropdown-item-ref
                    >Something else here</a
                  >
                </li>
              </ul>
            </div>
          </td>

        </tr>
        </tbody>
    </table>
  </div>
</div>
<div class="flex justify-center">Rellenar todos los campos (obligatorio)</div>
<!--Tabla-->
<div class="flex flex-col justify-end items-end">
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
          <th class="px-4 py-2"></th>
          <th class="px-4 py-2"></th>
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
          <th class="px-4 py-2"><button onclick="editar()" class="bg-green-400  text-white font-bold py-2 px-4 rounded mt-4">Editar</button></th>
          <th class="px-4 py-2"><button onclick="Eliminar()" class="bg-red-500  text-white font-bold py-2 px-4 rounded mt-4">Eliminar</button></th>
        </tr>
        </tbody>
    </table>
    <div class="flex justify-center">Macuin DashBoards. Todos los derechos Reservados</div>
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
  function Eliminar() {
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: true
});
swalWithBootstrapButtons.fire({
  title: "¿Estas seguro?",
  icon: "warning",
  showCancelButton: true,
  cancelButtonText: "Cancelar",
  confirmButtonText: "Eliminar",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire({
      title: "Borrado!",
      text: "El ticket se borro",
      icon: "success"
    });
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelado",
      text: "El ticket no se borro",
      icon: "error"
    });
  }
});
  }
</script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endsection
  
</body>
</html>

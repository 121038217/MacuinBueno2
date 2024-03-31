<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>cliente Inicio </title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla')
  @section('contenido')

</head>
<body>

<div class="flex justify-center">
    <div class="flex items-center mr-4">
        <svg class="h-20 w-15 text-black-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
    </div>
    <form class="w-72 mt-16" onsubmit="return validateForm()">
  <div class="space-y-4">
    <label for="full_name" class="block text-sm font-medium leading-6 text-gray-700">Nombre completo</label>
    <input type="text" name="full_name" id="full_name" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required>

    <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-700">Fecha de nacimiento</label>
    <input type="date" name="date_of_birth" id="date_of_birth" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required>

    <label for="department" class="block text-sm font-medium leading-6 text-gray-700">Departamento</label>
<select name="department" id="department" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required>
  <option value="" disabled selected>Selecciona un departamento</option>
  <option value="compas">Compas</option>
  <option value="contabilidad">Contabilidad</option>
  <option value="logistica">Logística</option>
  <option value="produccion">Producción</option>
  <option value="ventas">Ventas</option>
</select>

    <label for="email" class="block text-sm font-medium leading-6 text-gray-700">Correo electrónico</label>
    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required>

    <label for="password" class="block text-sm font-medium leading-6 text-gray-700">Contraseña</label>
    <input type="password" name="password" id="password" autocomplete="current-password" class="block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" required pattern=".{6,}" title="La contraseña debe tener al menos 6 caracteres">
    
    <div class="flex items-center justify-end mt-4 gap-x-2">
      <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition-colors duration-300">Cancelar</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition-colors duration-300 focus:visible:outline focus:visible:outline-2 focus:visible:outline-offset-2 focus:visible:outline-indigo-600">Guardar</button>
  </div>
  
  </div>
</form>

<script>
  function validateForm() {
    const password = document.getElementById("password");
    if (password.value.length < 6) {
      alert("La contraseña debe tener al menos 6 caracteres");
      return false;
    }
    return true;
  }

  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      if (validateForm()) {
        Swal.fire({
          icon: "success",
          title: "¡Edición exitosa!",
          showConfirmButton: false,
          timer: 1500
        });
        setTimeout(() => {
          form.submit();
        }, 1500);
      }
    });
  });
</script>
</script>
</div> 

@vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
</body>
</html>
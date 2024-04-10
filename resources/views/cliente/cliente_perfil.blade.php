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
<div class="flex justify-center">
    <div class="flex items-center mr-4">
      <svg class="h-20 w-15 text-black-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </div>
    <div class="w-72 mt-16">
      <p>{{ session('username') }}</p>
      <p>{{ session('fecha') }}</p>
      <p>{{ session('depa') }}</p>
      <p>{{ session('correo') }}</p>
    </div>
</div>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection
</body>
</html>

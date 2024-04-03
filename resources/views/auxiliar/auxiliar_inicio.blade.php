<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>auxiliar Inicio </title>
  <link rel="stylesheet" href="/build/app.css">
  @extends('layouts.plantilla_auxiliar')
  @section('contenido')
  
</head>
<body class="bg-gray-300">

 <!--Botones-->
 <div class="flex flex-col justify-start items-start py-30 px-10 mt-48">
    <div class="mb-5"> 
      <a href="auxiliar_controlticket" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300" onclick="mostrarTabla()">
        Control ticket
      </a>
    </div>
    <div class="mt-5">
      <a href="auxiliar_buscarticket" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
        Buscar ticket
      </a>
    </div>
    <div class="mt-10">
      <a href="auxiliar_reportes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
        Reportes
      </a>
    </div>
</div> 


@vite(['resources/css/app.css', 'resources/js/app.js'])

@endsection
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen">
        <img src="img/Macuin.jpg" alt="Logo Macuin" class="w-1/4 mr-8">
        <div>
    <h1 class="text-center mt-10 text-5xl font-bold">MACUIN DASHBOARDS</h1>
    
    <!--Formulario-->
    <form class="max-w-md mx-auto mt-8 bg-white p-9 rounded-lg shadow-md">
        <div class="mb-3 flex">
            <label for="user" class="w-1/4 font-semibold">Usuario:</label>
            <input type="text" id="user" name="user" class="w-3/4 px-4 py-2 border rounded-md">
        </div>
    </form>
            
    <!--Botones-->
    <div class="flex justify-center mt-5"> <!-- Centramos horizontalmente los botones -->
        <div class="mb-5 mr-3"> <!-- Agregamos margen derecho al primer botón -->
            <a href="login" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
                Cancelar 
            </a>
        </div>
        <div class="mb-5"> 
            <a href="confirmacion" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 ">
                Continuar
            </a>
        </div>
    </div>
</body>
</html>
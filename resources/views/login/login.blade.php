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
          


            
            <!-- Formulario de Login -->
            <form class="max-w-md mx-auto mt-8 bg-white p-9 rounded-lg shadow-md" method="POST" action="{{ route('loginss.process') }}">
    @csrf
    <div class="mb-10 flex">
        <label for="email" class="w-1/4 font-semibold">Correo:</label>
        <input type="email" id="email" name="email" class="w-3/4 px-4 py-2 border rounded-md" required>
    </div>
    <div class="mb-4 flex">
        <label for="password" class="w-1/4 font-semibold">Contraseña:</label>
        <input type="password" id="password" name="password" class="w-3/4 px-4 py-2 border rounded-md" required>
    </div>
    <div class="flex justify-center mt-4 space-x-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">Ingresar</button>
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300" onclick="window.history.back();">Cancelar</button>
    </div>
</form>


            <!-- Enlace de Recuperación de Contraseña -->
            <div class="flex justify-center mt-4 mb-5"> 
                <a href="recuperacion_contraseña" class="text-red-500 font-semibold hover:underline">Forgot Password?</a>
            </div>
        </div>
    </div>
</body>
</html>

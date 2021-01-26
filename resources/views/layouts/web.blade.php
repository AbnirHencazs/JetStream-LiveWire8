<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JetStream-LiveWire</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"><!--Utilizamos la funcion asset para que vaya directamente a public
    Ya dentro de public buscara el argumento que le pasemos. Hacemos esto para traer los estilos del Tailwind-->
</head>
<body>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
</body>
</html>
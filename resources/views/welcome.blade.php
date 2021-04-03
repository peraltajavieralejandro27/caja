<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <h1>Pasos para crear vistas:</h1>
    <ol>
        <li>
            Crear controlador: php artisan make:controller CajaController -r. Importante usar Controller al final y
            utilizar PascalCase en el nombre.
        </li>
        <li>
            Crear una carpeta que va a contener las vistas a crear en resources>views>nueva carepeta
        </li>
        <li>
            Crear los archivos con las vistas. Los normalizados son index.blade.php, create.blade.php, edit.blade.php,
            show.blade.php pero se pueden crear con cualquier nombre, siempre utilizando la extension "blade.php".
        </li>
        <li>
            En el controlador, método index(){} retornar la visata deseada. Ej: index(){ return view('caja.index') }. No
            se necesita indicar la extensión y la ruta se puede poner con "." o "/".
        </li>
        <li>
            Por ultimo crear la ruta en el archivo routes/web.php. Normalmente vamos a usar resourceful routes. El
            codigo que las crea es Route::resource('nombre_de_la_ruta',ControladorController::class);
        </li>
    </ol>

    <h2>
        <a href="https://drive.google.com/file/d/14R8r1CgAxJNUeYlP9-Qd5C9S3LE0_m7M/view?usp=sharing">
            Enlace al video explicativo.
        </a>
    </h2>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>

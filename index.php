<!-- * Desarrollar un formulario de Login (usuario y contraseña) 
 y crear la estructura de directorios que alojen imagenes, 
 javascript, php, css, etc.

* Programación de la cabecera (header)  y del pie (footer) de la aplicación.

* Desarrollar un script PHP denominado "procesoLogin.php", 
el cual debe validar los datos enviados por el Form 
y comprobar el correcto ingreso con el usuario y contraseña:

->usuario: fcytuader.
->contraseña: programacionavanzada.

Si es correcta la autenticación mostrar el texto "ingreso correctamente" 
en caso contrario informarlo y volver al Form inicial. -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- HEADER -->
    <header class="bg-primary text-white text-center py-4 mb-5">
        <div class="container">
            <h1 class="mb-0">TP PARTE 1</h1>
        </div>
    </header>

    <!-- CUERPO -->
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                <!-- imagen -->
            </div>
            <div class="col bg-white p-5 rounded-end">
                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>
                <!-- Componente FORM -->
                <?php include('./php/form_login.php'); ?>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <i>Programación avanzada - Grupo 2 - 2024</i>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

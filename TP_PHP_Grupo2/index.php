
<?php
    session_start(); 
    $_SESSION['nombre'] = 'El que esta testeando'; 
    unset($_SESSION['header']);
    // $_SESSION['captcha_error'] = false;
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grupo 2 - PA UADER</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png" />
</head>
<body class="bg-dark">
     <!-- HEADER -->
     <?php include('./php/components/header.php'); ?>


    <!-- CUERPO -->
    <div class="container w-75 bg-dark bg-gradient mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded d-flex align-items-center justify-content-center h-100">
                <img src="./img/logo.png" class="img-fluid" alt="...">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>
                <!-- Componente FORM -->
                <?php include('./php/form_login.php'); ?>
            </div>
        </div>
    </div>

      <!-- FOOTER -->
      <?php include('./php/components/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

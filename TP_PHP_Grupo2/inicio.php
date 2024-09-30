
<?php
    session_start(); 
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ChongueAR</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/inicio.css">
        <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png" />
    </head>
    <body>

        <!-- HEADER -->
        <?php 
            $_SESSION['header'] = $_SESSION['nombre'];
            include('./php/components/header.php'); 
        ?>
        
        <!-- CUERPO -->
        <div class="landing text-center col-lm-12 col-sm-12 mt-5">
            <div class="row mt-5 justify-content-center mb-3"> 
                <h1 class="fw-bold text-center">Bienvenido a ChongueAR</h1>
            </div>  
            <div class="d-flex justify-content-center gap-3 mt-5">
        <div class="card" style="width: 18rem;">
            <img src="./img/personas/persona1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Emilio</h5>
                <p class="card-text">Buenos Aires, a 500km</p>
                <a href="#" class="btn btn-primary">Chonguear</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./img/personas/persona2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Carolina</h5>
                <p class="card-text">Santa Fe, a 30km</p>
                <a href="#" class="btn btn-primary">Chonguear</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./img/personas/persona3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pipo</h5>
                <p class="card-text">Crespo, a 20km</p>
                <a href="#" class="btn btn-primary">Chonguear</a>
            </div>
        </div>
    </div>

        </div>
     
        <!-- FOOTER -->
        <?php include('./php/components/footer.php'); ?>

        <script src="" async defer></script>
    </body>
</html>
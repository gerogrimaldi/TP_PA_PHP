<?php
    $token = rand(5, 1500);
    $_SESSION ['token'] = $token;
    // echo $_SESSION['nombre']; 
?>

<!--LOGIN-->
<form method="post" action="./php/procesoLogin.php">
    <!-- TOKEN -->
    <input type="hidden" name="token" id="token" value="<?php echo $token?>">

    <?php
            if (isset($_SESSION ['login_error'])){
                echo "<p style='color: red;'>" . $_SESSION['login_error'] . "</p>";
                // Limpiar la variable de sesión después de mostrar el mensaje
                unset($_SESSION['login_error']);
            }
    ?>

    <div class="mb-4">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" id="username" name="username" class="form-control" required>
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div class="mb-4 form-check">
        <input type="checkbox" id="connected" name="connected" class="form-check-input">
        <label for="connected" class="form-check-label">Permanecer Conectado</label>
    </div>
    <div class="d-grid">
        <!-- CAPTCHA -->
        <?php
            if (isset($_SESSION ['captcha_error'])){
                echo "<p style='color: red;'>" . $_SESSION['captcha_error'] . "</p>";
                // Limpiar la variable de sesión después de mostrar el mensaje
                unset($_SESSION['captcha_error']);
            }
        ?>
        <div class="g-recaptcha" data-sitekey="6LfMnkkqAAAAAI10IzlGrCVlcge0CAcxMozY_jBL" required></div>
        <br/>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Iniciar Sesion</button>
    </div>
    <div class="my-3">
        <span>No tienes Cuenta? <a href="#">Regístrate</a></span><br>
        <span><a href="#">Recuperar Password</a></span>
    </div>
</form>

<!--Login con Redes-->
<div class="container w-100 my-5">
    <div class="row text-center">
        <div class="col-12">Iniciar Sesión</div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-outline-primary w-100 my-1">
                <div class="row align-items-center">
                    <div class="col-2 d-none d-md-block">
                        <img src="./img/facebook.png" width="32" alt="Facebook">
                    </div>
                    <div class="col-12 col-md-10 text-center">
                        Facebook
                    </div>
                </div>
            </button>
        </div>
        <div class="col">
            <button class="btn btn-outline-danger w-100 my-1">
                <div class="row align-items-center">
                    <div class="col-2 d-none d-md-block">
                        <img src="./img/google.png" width="32" alt="Google">
                    </div>
                    <div class="col-12 col-md-10 text-center">
                        Google
                    </div>
                </div>
            </button>
        </div>
    </div>
</div>

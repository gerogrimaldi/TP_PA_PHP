<?php
    
    $usuario = "fcytuader";
    $contrasenia = "programacionavanzada";

    $error = '';
    $errMsg = '';
    
    if (isset($_POST['username'])) { // Cambia 'name' a 'username'
        // Verificar si el CAPTCHA está completado
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            // Verificar el CAPTCHA
            $secret_key = "6LfMnkkqAAAAAI10IzlGrCVlcge0CAcxMozY_jBL"; // Asegúrate de usar la clave secreta correcta
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=" . $_POST['g-recaptcha-response'];
            $verify = json_decode(file_get_contents($url));
    
            // Seguir si es válido
            if ($verify->success) {
                // Aquí puedes realizar el proceso de inicio de sesión
                // Validar usuario y contraseña...
    
                echo "Inicio de sesión exitoso"; // O redirigir a otra página
            } else {
                $error = "Invalid Captcha.";
            }
        } else {
            $errMsg = 'Por favor, complete el CAPTCHA.';
        }
    
        // Resultado
        if ($error != "") {
            echo $error;
        } elseif ($errMsg != "") {
            echo $errMsg;
        }
    }
    
    if($_POST['username'] == $usuario && $_POST['password'] == $contrasenia){
        echo
        (
            "<div>
                <h2>Ingreso correcto</h2>
                <a href='../index.php'>Volver</a>
            </div>"
        );
    }else{
        echo
        (
        "<div>
            <h2>Usuario o contraseña incorrecto</h2>
            <a href='../index.php'>Volver a intentar</a>
        </div>"
        );
    }
?>


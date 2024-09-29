<?php
    $error = '';
    $errMsg = '';
    $_SESSION ['captcha'] = false;
    
    //valido captcha
    if (isset($_POST['submit'])) {
        echo "<br>ENTRO <br>";
        // Verificar si el CAPTCHA está completado
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            // Verificar el CAPTCHA
            $secret_key = "6LfMnkkqAAAAANcmx-vG5TPjL-p8WNY_nrgsPWft";
            // $secret_key = "6LfMnkkqAAAAAI10IzlGrCVlcge0CAcxMozY_jBL";
            $response = $_POST['g-recaptcha-response'];
            $remoteip = $_SERVER['REMOTE_ADDR'];

            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$remoteip";
            $result = file_get_contents( $url);
            $resultJson = json_decode($result);
            print_r($resultJson);
            // Seguir si es válido
            if ($resultJson->success) {

                echo "CAPTCHA válido";

            } else {
                //recaptcha fallido
                echo "CAPTCHA inválido: ";
                $error = "Invalid Captcha.";
                
            }
        } else {
            $errMsg = 'Por favor, complete el CAPTCHA.';
        }

        // si hay un error lo muestro
        if ($error != "") {
            echo "<br>ERROR: ".$error. "<br>";
        } elseif ($errMsg != "") {
            echo $errMsg;
        } else {
            echo "<br>Todo OK<br>";
            $_SESSION ['captcha'] = true;
        }


        // print_r($resultJson);
    }
?>

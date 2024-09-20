<?php
$error = '';
$errMsg = '';

if (isset($_POST['submit'])) {
    // Verificar si el CAPTCHA está completado
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        // Verificar el CAPTCHA
        $secret_key = "6LfMnkkqAAAAANcmx-vG5TPjL-p8WNY_nrgsPWft";
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=" . $_POST['g-recaptcha-response'];
        $verify = json_decode(file_get_contents($url));

        // Seguir si es válido
        if ($verify->success) {
            $to = "admin@site.com";
            $subject = "Contact Form";
            $body = "";
            echo "CAPTCHA válido";

            foreach ($_POST as $k => $v) {
                if ($k != 'g-recaptcha-response') {
                    $body .= "$k : $v\r\n";
                }
            }

            // Enviar el email
            if (!mail($to, $subject, $body)) {
                $error = "Error al enviar el email.";
            }
        } else {
            echo "CAPTCHA inválido: " . $verify->error . "<br>";
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
    } else {
        echo "Todo OK";
    }
}
?>

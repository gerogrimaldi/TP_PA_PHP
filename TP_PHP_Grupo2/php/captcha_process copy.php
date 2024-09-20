<?php
if(isset($_POST['submit']))
{
    // Verificar si el CAPTCHA está completado
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
    {

        // verificar captcha
        $verify = "";
        $secret_key = "6LfMnkkqAAAAANcmx-vG5TPjL-p8WNY_nrgsPWft";
        $url= "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=".$_POST['g-recaptcha-response'];
        $verify= json_decode(file_get_contents($url));

        // seguir si es valido
        if($verify->success){
            $to = "admin@site.com";
            $subject = "Contact Form";
            $body = "";

            foreach($_POST as $k=>$v){
                if ($k != 'g-recaptcha-response') { $body .= "$k : $v\r\n"; }
            }
            if (!mail($to,$subject,$body)){
                $error = "Error al enviar el email";
            }
        }else{
            $error = "Invalid Captcha";
        };

        // resultado
        echo $error == "" ?  "Todo OK" : $error;
    }
    else
    {
        $errMsg = 'Please click on the reCAPTCHA box.';
    }   
}
?>
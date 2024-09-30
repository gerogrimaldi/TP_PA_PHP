<?php
    session_start(); 
    echo "<br>USUARIO: ".$_SESSION['nombre']."<br>";
    // Verifico token del form
    if($_POST['token'] == $_SESSION['token']){
        //claves
        echo "<br>TOKEN: ".$_SESSION['token']."<br>"; 

// #################################################################################
// MANEJO CAPTCHA
    require_once ("captcha_process.php");

// #################################################################################
//verifico usuario y contraseña
    if($_SESSION ['captcha']){
        echo "<br>EJECUTO VALIDACION<br>";
        $usuario = "fcytuader";
        $contrasenia = "programacionavanzada";
    
        if($_POST['username'] == $usuario && $_POST['password'] == $contrasenia){
            $_SESSION['header'] = $_SESSION['nombre'];
            header("Location: ../inicio.php"); // Cambia esto a la ruta correcta
            exit();
        }else{
            // Si hay un error en el LOGIN, redirijo a la misma página
            // Guardar el mensaje de error en la sesión para mostrarlo más tarde
            $_SESSION['login_error'] = "Usuario o contraseña incorrectos";
            header("Location: ../index.php"); // Cambia esto a la ruta correcta
            exit();
            }
        }else {
            // Si hay un error en el CAPTCHA, redirijo a la misma página
            // Guardar el mensaje de error en la sesión para mostrarlo más tarde
            $_SESSION['captcha_error'] = "Por favor ingrese el captcha";
            header("Location: ../index.php"); // Cambia esto a la ruta correcta
            exit();
        }
    }
?>


<?php
    
    $usuario = "fcytuader";
    $contrasenia = "programacionavanzada";

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


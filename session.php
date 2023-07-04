<?php
session_start();

# vemos si el usuario no esta logueado
if (empty($_SESSION["usuario"])) {
    #si el usuario no esta logueado le mostramos el link para hacerlo
    $logueado_si_no = "<a class=\"link-white\" href=\"formulario.php\">Abrir sesión</a>";
}else{
    #si el usuario no esta logueado vemos si admin o usuario y le mostramos su nombre y un link para cerrar sección 
    if($_SESSION["usuario"] == "admin"){
        $user_session = $_SESSION["usuario"];
        $logueado_si_no = $_SESSION["usuario"] . " - <a class=\"link-white\" href=\"logout.php\">Cerrar sesión</a>";
        $user_admin = true;
    }else{
        $user_session = $_SESSION["usuario"];
        $logueado_si_no = $_SESSION["usuario"] . " - <a class=\"link-white\" href=\"logout.php\">Cerrar sesión</a>";
        $user_admin = false;
    }
}
?>
<?php
$usuario_post = $_POST["usuario"];
$palabra_post = $_POST["pass"];

if($usuario_post == "admin"){
    $usuario = "admin";
    $pass_ok = "123a";
}else{
    $usuario = "user";
    $pass_ok = "123";
}

if ($usuario === $usuario_post && $pass_ok === $palabra_post) {
    # Iniciamos sesión
    session_start();
    $_SESSION["usuario"] = $usuario;

    header("Location: index.php");
} else {
    echo "El usuario o la contraseña son incorrectos. ";
    echo "<a href=\"formulario.php\">Intentar nuevamente</a>";
}
?>
<?php
include("session.php");
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logueo de usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<div class="header">
  <h1>Mi pagina de usuarios</h1> 
  <p>Cuenta: 
<?php
    if (empty($user_session)) {
    #si el usuario no esta logueado le mostramos el link para hacerlo
    echo "<a class=\"link-white\" href=\"formulario.php\">Abrir sesión</a>";
}else{
    echo $logueado_si_no;
}
?>
</p>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li>Link 1</li>
      <li>link 2</li>
      <li>link 3</li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <h2>Formulario página con sesión de usuarios</h2>
    <p>Este contenido es público</p>
<?php 
if(!$_POST){
    if(empty($user_session)){
?>
<h3>Ingrese por favor su suriuo y conraseña:</h3>
    <form action="formulario.php" method="post">
    <input name="usuario" type="text" placeholder="Nombre de usuario">
    <br><br>
    <input name="pass" type="password" placeholder="Contraseña">
    <br><br>
    <input type="submit" value="Iniciar sesión">
    </form>

    <h4>Para poder ver el contenido de un usuario</h4>
        <p><b>User:</b> usuario<br>
        <b>pass:</b> 123</p>
    <h4>Para poder ver el contenido del Administrador</h4>
        <p><b>User:</b> admin<br>
        <b>pass:</b> 123a</p>
<?php
    }else{
        echo "Usted ya está loguedo!!";
    };
 }else{

    include("login.php");
}

?>

  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h3>Informacion pública</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis voluptatibus accusamus.</p>
      <?php if (isset($user_session) && $user_admin == false) { ?>
      <h3>información Usuario logueado</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis voluptatibus accusamus.</p>
      <?php } ?>
      <?php if (isset($user_session) && $user_admin == true) { ?>
      <h3>información Administrador logueado</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis voluptatibus accusamus, magni. </p>
      <?php } ?>
    </div>
  </div>
</div>

<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>




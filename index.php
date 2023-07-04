<?php
include("session.php");
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
  <h1>Mi pagina de usuarios</h1> 
  <p>Cuenta: <?php echo $logueado_si_no ?></p>
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
    <h2>Pagina con sesión de usuarios, Estamos en el Home!</h2>
    <p>este contenido es público</p>
    <h4>Para poder ver el contenido de un usuario</h4>
        <p><b>User:</b> usuario<br>
        <b>pass:</b> 123</p>
    <h4>Para poder ver el contenido del Administrador</h4>
        <p><b>User:</b> admin<br>
        <b>pass:</b> 123a</p>

    <p><b>TP archivos en Git: <a href="https://github.com/cambenedetti/tp-users" target="_blank" rel="noopener">repositorio tp-users</a></b></p> 


        <?php if (isset($user_session) && $user_admin == false) { ?>
      <h2>información Usuario logueado</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis voluptatibus accusamus, magni, excepturi rerum dolorem ex quasi fugit quo aperiam sequi odit saepe cum pariatur id. Dolore obcaecati tenetur expedita. </p>
      <?php } ?>
      <?php if (isset($user_session) && $user_admin == true) { ?>
      <h2>información Administrador logueado</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis voluptatibus accusamus, magni, excepturi rerum dolorem ex quasi fugit quo aperiam sequi odit saepe cum pariatur id. Dolore obcaecati tenetur expedita. </p>
      <?php } ?>

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




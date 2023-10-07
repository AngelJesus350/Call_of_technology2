<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
  include"libs.php";
  ?>

</head>
<body>
	<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Menú</a>
  </li>
 
  <li class="nav-item">
   <a class="nav-link" href="login.php">Iniciar sesión</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<p></p>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover">  <a href="login.php">Iniciar Sesion</a></h2>
    
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/bologo.png" id="icon" alt="User Icon" />
    </div>
   

    <!-- Login Form -->
    <form name="registro" method="POST" action="nuevo_usuario.php">
      <input type="text" id="login" class="fadeIn second" name="nombre" placeholder="Nombre">
      <input type="text" id="password" class="fadeIn third" name="apaterno" placeholder="Apellido Paterno">
      <input type="text" id="login" class="fadeIn second" name="amaterno" placeholder="Apellido materno">
         <input type="text" id="password" class="fadeIn third" name="telefono" placeholder="Telefono">
      <input type="text" id="password" class="fadeIn third" name="email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="text" id="login" class="fadeIn second" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
      <input type="submit" class="fadeIn fourth" value="Registrarme">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Recuperar Contraceña</a>
    </div>

  </div>
</div>
<p></p>
<?php
include"footer.php";
?>
</body>
</html>
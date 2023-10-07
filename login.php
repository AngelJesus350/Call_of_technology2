<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Sesión</title>
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
    <a class="nav-link" href="regis.php">Registrarse</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
  </li>
</ul>
<p></p>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Iniciar Sesion </h2>
    <h2 class="inactive underlineHover">  <a href="regis.php">¿Eres Nuevo?</a> </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/bologo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form name="registro" method="POST" action="validar.php">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="Recuperar Contraseña/Recuperar_Contraseña.php">Recuperar Contraceña</a>
    </div>

  </div>
</div>
<p></p>
<?php
include"footer.php";
?>
</body>
</html>
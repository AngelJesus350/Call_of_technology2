<?php

$email = $_POST['email'];
$password = $_POST['password'];

require("../conexion.php");
$modificar = $mysqli->query("UPDATE tbl_usuarios SET password ='$password'  WHERE email = '$email'");

$asunto = "Recupera Tu Contraseña";

$carta = "Estimado: $email \n";
$carta .= "Has olvidado tu contraceña \n";
$carta .= " Tu contraceña es $password \n";
$carta .= "Iniciar Sesion: https://proyectoswebtics.com/Hospital_Denova/hospital/Login_H.php \n";
mail($email, $asunto, $carta);
echo '<script>alert("Correo Enviado")</script>';
 echo "<script>location.href='../login.php'</script>";
    ?>
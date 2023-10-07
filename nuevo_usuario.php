<?php

$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];


require("conexion.php");
$insertar =$mysqli->query("INSERT INTO tbl_usuarios VALUES(' ','$nombre','$apaterno','$amaterno','$telefono','$email','$fecha_nacimiento','$password','activo')");
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=regis.php">
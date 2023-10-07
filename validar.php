<?php
session_start();
require("conexion.php");

$email = $_POST['email'];
$password = $_POST['password']; // Corregido: 'passsword' -> 'password'

$busca = $mysqli->query("SELECT * FROM tbl_usuarios WHERE email='$email'");
if ($f2 = $busca->fetch_array()) {
    if ($password == $f2['password']) {
        $_SESSION['email'] = $f2['email'];
        $_SESSION['nombre'] = $f2['nombre'];
        $_SESSION['password'] = $f2['password'];
        $_SESSION['id_usuario'] = $f2['id_usuario'];
        header("Location: index2.php"); // Corregido: Usar 'header' para redireccionar
        exit;
    } else {
        echo '<script>alert("Contraseña Incorrecta")</script>';
        echo "<script>location.href='login.php'</script>";
    }
} else {
    echo '<script>alert("Email Incorrecto")</script>';
    echo "<script>location.href='login.php'</script>";
}
?>

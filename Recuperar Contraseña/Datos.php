<html>

<head>
    <meta charset="utf-8">
    <title>Recuperar Contraseña </title>
    
<link rel="stylesheet" href="../CSS Recuperar contraseña/R_C.css">
    </head>

<body>
    <center>
        <h1>Recuperar Contraseña
        </h1>
         <form name="buscar" method="POST" action="Correo.php">
            <?php
            echo "********************************************************************************************************************************" . "</p>";
            require("../conexion.php");

            $email = $_POST['email'];

            $consulta = $mysqli->query("SELECT * FROM tbl_usuarios WHERE email = '$email'"); 

            while ($row = mysqli_fetch_array($consulta)) {

                ?>



                Correo : <input type="text" id="login" class="fadeIn second" name="email" value="<?php echo $row['email'] ?>" randonly>
                <p>

                   <input type="hidden" name="password" value="<?php echo $row['password'] ?>">
                <p>


                    <input type="submit" name="enviar" value="RECUPERAR">
                    <!--  <p><br>-->

                <?php } ?>
    </center>
    </form>

</body>

</html>

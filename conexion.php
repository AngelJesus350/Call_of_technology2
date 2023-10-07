<?php

$mysqli=new mysqli("localhost","root","","hack");
 $mysqli->set_charset("utf8"); 
 if($mysqli->connect_error)
 {
 	echo "algo salio a conectar la base de datos:(".$mysqli->connect_error.")".$mysqli->connect_error;
 }


 ?>
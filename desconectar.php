<?php
session_start();
if(@!$_SESSION['email']){
	session_destroy();
	echo "<script>location.href='index.php'</script>";
}

else{
	echo "<script>location.href='index.php'</script>";
}

?>
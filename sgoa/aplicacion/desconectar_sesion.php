<?php
session_start();
if($_SESSION['usuario']){
        session_unset();
	session_destroy();
	header("location:../index.php");
}
else{
	header("location:../index.php");
}
?>

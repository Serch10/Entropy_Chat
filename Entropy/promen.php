<?php
//Procesamiento de mensajes
session_start();
include "conexion.php";

if(isset($_POST['enviar']) && isset($_POST['correo_2']))
{
	$correo= $_SESSION['correo'];
	$envio = $_POST['correo_2'];
	$mensaje= $_POST['mensaje'];
	$insert= "INSERT INTO chat (correo,mensaje,correo_2)";
	$insert.= "VALUES ('".$correo."','".$mensaje."','".$envio."')";
	$query=$conexion->query($insert);
	header("Location: index.php?correo=".$envio);
}else{
	echo "Error!";
}
?>
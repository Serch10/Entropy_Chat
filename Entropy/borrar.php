<?php
session_start();
include "conexion.php";
if(isset($_SESSION['correo']))
{
$id = $_GET['id'];
$sql = "DELETE FROM chat WHERE id='".$id."'";
$query=$conexion->query($sql);
header("Location: mensajes.php");
}else{
	echo "Error";
	header('refresh:2; mensajes.php');
}
?>
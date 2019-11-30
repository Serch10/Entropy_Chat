<?php
session_start();
include "conexion.php";
if(isset($_POST['enviar']))
{
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$sql= "SELECT correo, password FROM usuario WHERE correo ='".$correo."' AND password ='".$password."'";
	$query=$conexion->query($sql);
	//$query=mysqli_query($sql,$conexion);
	$rows=mysqli_num_rows($query);
	if($row=mysqli_fetch_array($query))
	{
		$_SESSION['correo'] = $row['correo'];
		$_SESSION['password'] = $row['password'];
		header("Location:menu_principal.php");
	}else{
		echo'<script>alert("Correo o password invalido"); window.location="login.php"</script> ';
		//header('refresh:2; login.php');
	}
}
?>


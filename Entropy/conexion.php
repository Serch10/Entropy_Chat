<?php
//Esta parte es para realizar la conexion con la base de datos
	$conexion= new mysqli("localhost","root","","entropy");
	if($conexion){
	}
	else{
	echo "conexion no exitosa";
	}
?>
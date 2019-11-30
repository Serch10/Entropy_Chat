<?php

	include ("conexion.php");
	$nombre=$_POST['nombre'];
	$edad=($_POST['edad']);
	$correo=($_POST['correo']);
	$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	//$imagenpic=$_FILES['imagen']['name'];
	//$ruta=$_FILES['imagen']['tmp_name'];
	//$destino="imagenes/".$imagenpic;
	//copy($ruta,$destino);
	$password=$_POST['password'];
	if($imagen != null)
		$sql="UPDATE usuario set nombre='$nombre', edad='$edad', imagen='$imagen', password='$password' where correo='$correo'";
	else
		$sql="UPDATE usuario set nombre='$nombre', edad='$edad', password='$password' where correo='$correo'";
	$resultado=$conexion->query($sql);
	if ($resultado==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	}else {

		echo '<script>alert("REGISTRO ACTUALIZADO"); window.location="editar.php"</script> ';

	}
?>

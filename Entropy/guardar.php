<?php
//Este archivo guarda la informacion del usuario nuevo en la base de datos
	include ("conexion.php");
	$nombre=$_POST['nombre'];
	$edad=($_POST['edad']);
	$correo=($_POST['correo']);
	$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	//Recogemos el archivo enviado por el formulario
   
////////////////////////////////////////////////////////////////////////////////////
   /*	$imagen = $_FILES['imagen']['name'];
   //Si el archivo contiene algo y es diferente de vacio
  	 if (isset($imagen) && $imagen != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp = $_FILES['imagen']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'images/'.$imagen)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$imagen, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="images/'.$imagen.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }*/
//////////////////////////////////////////////////////////////////////////////////////





   $password=$_POST['password'];
   

	$sql="INSERT INTO usuario (nombre,edad,correo,imagen,password)VALUES('$nombre','$edad','$correo','".base64_encode($imagen)."','$password')";

	$resultado=$conexion->query($sql);
	if($resultado==null){
		echo"Hubo Algun Error";
	}
	else{
		echo '<script type="text/javascript" >
        alert("REGISTRO EXITOSO"); 
        window.location="registrar.php"; 
    	</script> ';
	}
	

?>


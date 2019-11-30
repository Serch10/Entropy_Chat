<?php
session_start();
require "conexion.php";

if(isset($_SESSION['correo']))
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar datos</title>
    <link rel="stylesheet" type="text/css" href="estilo1.css">
 </head>
<body background="imagenes/fondo.jpg">
<div class="container">
  <center><svg viewbox="-20 0 150 20" >
    <defs>
      <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
        <stop offset="15%" stop-color="#D7F519"/>
        <stop offset="95%" stop-color="#FDFEFE"/>
      </linearGradient>
        <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
          <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
            <animateTransform
              attributeName="transform"
              begin="0s"
              dur="1.5s"
              type="translate"
              from="0,0"
              to="40,0"
              repeatCount="indefinite" />
          </path>
        </pattern>
    </defs>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#wave)"  fill-opacity="3">Editar datos</text>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#gradient)" fill-opacity=".6">Editar datos</text>
  </svg></center>
</div>

	<?php
    //session_start();
   // include "conexion.php";

    //if(isset($_SESSION['correo']))
		require("conexion.php");
    $correo=($_SESSION['correo']);
    $_SESSION['nom']="nombre";
    $_SESSION['edad']="edad";
  //Where ( correo like '$envia' and correo_2 like '$recibe')
		$sql="SELECT * FROM usuario WHERE correo='$correo'";
		///$modifica=$conexion->query($sql);
    $res=mysqli_query($conexion,$sql);
		//$modifica=mysqli_query($mysqli,$sql);
	      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		      $nombre= $row['nombre'];
          $edad= $row['edad'];
          $imagen= $row['imagen'];
          $password= $row['password'];
        }
		      //$_SESSION['edad']=$row[1];
		      //$_SESSION['imagen']=$row[2];
		    	//$_SESSION['password']=$row[3];
      
        //$name=$_SESSION['nom'];
        //$edad=$_SESSION['edad'];
        //$imagen=$_SESSION['imagen'];
        //$password = $_SESSION['password'];

	?>

<form action="modificar.php" method="post" enctype="multipart/form-data">
<table class="tabla" cellspacing="1" cellpadding="30" style="margin: 0 auto;">
  <tr>
    <td><label for="nombre">Nombre</label></td><td><input type="text" name="nombre" value= "<?php echo $nombre ?>" autocomplete="off" required></td>
    <td><label for="edad">Edad</label></td><td><input type="text" name="edad" value= "<?php echo $edad ?>" autocomplete="off" required></td>
  </tr>
  <tr style="max-width:">
    <td><label for="correo">Correo electronico</label></td><td><input type="email" name="correo" value= "<?php echo $correo ?>" autocomplete="off"></td>
    <?php ?>
    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($imagen)?>" width="200" height="200" /> <br> <input type="file" name="imagen" accept="image/*"> </td>
	<!--<td><label for="imagen">Imagen</label></td><td><input type="file" name="imagen" value= "<?php //echo $imagen ?>"></td>-->
  </tr>
  <tr>
    <td><label for="password">Contraseña</label></td><td><input type="password" name="password" value= "<?php echo $password ?>" required  autocomplete="off"></td>
  </tr>

</table>

	<center><input type="submit" value="Guardar" ></center>
</form>
<br>
<form action="menu_principal.php" method="post">
    <center><input type="submit"  name="submit" value="Atras"/></center>
</form>
</body>
</html>
<!DOCTYPE html>
<!--Esta parte es el formulario donde se inserta la informacion de un nuevo usuario-->
<html lang="en">
<head>
  <title>Entropyland</title>
  <link rel="stylesheet" type="text/css" href="estilo1.css">
  <meta charset="utf-8">
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
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#wave)"  fill-opacity="3">Iniciar Sesion</text>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#gradient)" fill-opacity=".6">Iniciar Sesion</text>
  </svg></center>
</div>
<div class="container-fluid">
	<ul class="nav navbar-nav navbar-right">
		<a href="registrar.php" style="color: #FFFFFF">Registrate</a>
	</ul>
</div>
<?php
session_start();
include "conexion.php";
if(isset($_SESSION['correo']))
{
	?>
	Hola <?php=$_SESSION['correo']?> Ya has iniciado sesion <a href="logout.php">Cerrar Sesion</a>
	<?php
}else{
	?>
	<table class="tabla" cellspacing="1" cellpadding="30" style="margin: 0 auto;">
		<form method="post" action="logeo.php">
		<tr>
			<td><label for="user">User:</td><td><input type="text" name="correo" autocomplete="off"></td>
		</tr>
		<tr>
			<td><label for="password">Password:</td><td><input type="password" name="password"/></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="enviar" value="Acceder"></td>
		</tr>
		</form>
	</table>
	<?php
}
?>
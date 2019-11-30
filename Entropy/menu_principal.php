<?php
session_start();
include "conexion.php";

if(isset($_SESSION['correo']))
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Usuario</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
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
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#wave)"  fill-opacity="3">Menu</text>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#gradient)" fill-opacity=".6">Menu</text>
  </svg></center>
</div>

<div class="container-fluid">
	<ul class="nav navbar-nav navbar-right">
		<a href="" style="color: #FFFFFF">Bienvenido <strong><?php echo $_SESSION['correo'];?></strong> </a>
		<br>
		<a href="logout.php" style="color: #FFFFFF"> Cerrar Sesión </a>
	</ul>
</div>
  <center><input type="submit" value="Editar perfil" onclick="location.href='editar.php'"></center>
  <br>
 	<center><input type="submit" value="Agregar contactos" onclick="location.href='agregar_contacto.php'"></center>
	<br>
	<center><input type="submit" value="Iniciar conversacion con contacto" onclick="location.href='chat_contacto.php'"></center>
	<br>
</body>
</html>

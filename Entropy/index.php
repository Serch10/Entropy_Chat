<?php
session_start();
if (isset($_SESSION['correo']))
{

	?>
	<!DOCTYPE html>
<!--Esta parte es el formulario donde se inserta la informacion de un nuevo usuario-->
<html lang="en">
<head>
  <title>Chat</title>
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
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#wave)"  fill-opacity="3">Conversación</text>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#gradient)" fill-opacity=".6">Conversación</text>
  </svg></center>
</div>
	<table width="800" height="500">
		<form method="post" action="promen.php">
		<tr>
			<td><iframe src="mensajes.php?correo=<?= $_GET["correo"] ?>" name="iframe" width ="700" heigth="400"></iframe></td>
		</tr>
		<tr>
			<td><input type="text" size="90" name="mensaje"/><input type="hidden" name="correo_2" value="<?= $_GET["correo"] ?>" > <button type="submit" name ="enviar">Enviar Mensaje</button></td>
		</tr>
		<tr>
			<td style="color: #FFFFFF">Estas conectado como <strong> <?=$_SESSION['correo']?> <a href="logout.php">Cerrar Sesion</a> </strong></td>
		</tr>
		</form>

	</table>
	 <form action="chat_contacto.php" method="post">
    <center><input type="submit"  name="submit" value="Atras"/></center>
  </form>
	<?php
}else{
	?>
	Debes iniciar sesion para poder utilizar el chat <a href="login.php">Click aqui</a>
	<?php
}
?>
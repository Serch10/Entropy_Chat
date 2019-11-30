<!DOCTYPE html>
<!--Esta parte es el formulario donde se inserta la informacion de un nuevo usuario-->
<html lang="en">
<head>
  <title>Registrar</title>
  <link rel="stylesheet" type="text/css" href="estilo1.css">
  <meta charset="utf-8">
</head>
<body background="imagenes/fondo.jpg">
<form action="guardar.php" method="POST" enctype="multipart/form-data">
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
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#wave)"  fill-opacity="3">Registrar</text>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#gradient)" fill-opacity=".6">Registrar</text>
  </svg></center>
</div>

<!--Creacion de la tabla donde vienen los input para ingresar valores al nuevo usuario-->
<table class="tabla" cellspacing="1" cellpadding="30" style="margin: 0 auto;">
  <tr>
    <td><label for="nombre">Nombre</label></td><td><input type="text" name="nombre" placeholder="Nombre" autocomplete="off" required></td>
    <td><label for="edad">Edad</label></td><td><input type="text" name="edad" placeholder="Edad" autocomplete="off" required></td>
  </tr>
  <tr>
    <td><label for="correo">Correo electronico</label></td><td><input type="email" name="correo" placeholder="alguien@algo.com" autocomplete="off"></td>
    <td><label for="imagen">Imagen</label></td><td><input type="file" name="imagen" accept="image/*"></td>
  </tr>
  <tr>
    <td><label for="password">Contraseña</label></td><td><input type="password" name="password"  required placeholder="Contraseña" autocomplete="off"></td>
  </tr>
  </table>
    <center><input type="submit" value="Guardar"></center>
  </form>
  <br>
  <form action="login.php" method="post">
    <center><input type="submit"  name="submit" value="Atras"/></center>
  </form>
</body>
</html>


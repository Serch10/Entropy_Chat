<?php
session_start();
include "conexion.php";

if(isset($_SESSION['correo']))
?>
<!DOCTYPE html>
<!--Esta parte es el formulario donde se inserta la informacion de un nuevo usuario-->
<html lang="en">
<head>
  <title>Chat contacto</title>
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
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#wave)"  fill-opacity="3">Chat contactos</text>
      <text text-anchor="middle" x="55" y="12" font-size="8" fill="url(#gradient)" fill-opacity=".6">Chat contactos</text>
  </svg></center>
</div>
<div>
    <?php 

        $sql = "SELECT * FROM contacto Where usuario_correo_1 like '".$_SESSION['correo']."' or usuario_correo_2 like '".$_SESSION['correo']."'";
        $query=$conexion->query($sql);
        $rows=mysqli_num_rows($query);
        if($rows>0)
        {
          while($row=mysqli_fetch_array($query))
          {
            $contacto;
            if($row['usuario_correo_1'] == $_SESSION['correo'])
              $contacto = $row['usuario_correo_2'];
            else 
              $contacto = $row['usuario_correo_1']
              ?>
            <a href="index.php?correo=<?= $contacto ?>"> <strong style="color: #FFFFFF"><?= $contacto ?></strong> </a> <br><br>

            <?php
          }
        }
      
    ?>
  </div>
<form action="menu_principal.php" method="post">
    <center><input type="submit"  name="submit" value="Atras"/></center>
</form>
  </body>
  </html>
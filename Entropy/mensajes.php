<?php
session_start();
include "conexion.php";

$recibe = $_GET["correo"];
$envia = $_SESSION['correo'];

if(isset($envia))
{
	$sql = "SELECT * FROM chat Where ( correo like '$envia' and correo_2 like '$recibe') or ( correo like '$recibe' and correo_2 like '$envia')";
	$query=$conexion->query($sql);
	$rows=mysqli_num_rows($query);
	if($rows>0)
	{
		while($row=mysqli_fetch_array($query))
		{
			?>
				<div style="color: #FFFFFF">
				<a href="borrar.php?id=<?=$row['id']?>"><font color="red"> Borrar</font> </a>
				<strong><?=$row['correo']?></strong>: <?=$row['mensaje']?><br><br>
			</div>
			<?php
		}
	}else{
		?>
		&nbsp;
		<?php
	}
}
header('refresh:0.300; mensajes.php?correo='.$_GET["correo"]);
?>
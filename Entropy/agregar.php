<?php
session_start();
include "conexion.php";

if(isset($_SESSION['correo']) && isset($_SESSION['correo']) ){
    $correo= $_SESSION['correo'];
    $correo_2 = $_POST['correo'];
    
    $sql = "SELECT * FROM usuario Where correo like '".$correo_2."'";
    $query=$conexion->query($sql);
    $rows=mysqli_num_rows($query);
    if($rows>0){
        $insert= "INSERT INTO contacto (usuario_correo_1,usuario_correo_2)";
        $insert.= "VALUES ('".$correo."','".$correo_2."')";
        $query=$conexion->query($insert);
        echo "<script>
            alert('Contacto agregado correctamente');
            window.location='menu_principal.php';
        </script>";
        //header("Location: menu_principal.php");
    }
    else {
        echo "<script>
            alert('El usuario no existe');
            window.location='menu_principal.php';
        </script>";
    }

   
}
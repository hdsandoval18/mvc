<?php

include("conexion.php");
$con=conectar();


$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$nombre_habitacion=$_POST['nombre_habitacion'];

$sql="UPDATE usuarios SET  correo='$correo',telefono='$telefono',nombre_habitacion='$nombre_habitacion' WHERE  correo= '$correo' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
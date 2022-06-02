<?php
include("conexion.php");
$con=conectar();


$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$hora_ingreso=$_POST['hora_ingreso'];
$nombre_habitacion=$_POST['nombre_habitacion'];
$tiempo_estadia=$_POST['tiempo_estadia'];


$sql="INSERT INTO usuarios  (correo , telefono , fecha_ingreso , hora_ingreso, nombre_habitacion, tiempo_estadia ) VALUES ('$correo','$telefono','$fecha_ingreso','$hora_ingreso','$nombre_habitacion','$tiempo_estadia')";
$query= mysqli_query ($con,$sql);

if($query){
    Header("Location: index.php");
    
}
else {
    
}
?>
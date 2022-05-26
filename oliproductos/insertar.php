<?php
include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$Nombre=$_POST['Nombre'];
$Stock=$_POST['Stock'];
$Precio=$_POST['Precio'];


$sql="INSERT INTO productos VALUES('$id_producto','$Nombre','$Stock','$Precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>
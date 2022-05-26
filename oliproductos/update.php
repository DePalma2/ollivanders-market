<?php

include("conexion.php");
$con=conectar();

$id_producto=$_POST['id_producto'];
$Nombre=$_POST['Nombre'];
$Stock=$_POST['Stock'];
$Precio=$_POST['Precio'];

$sql="UPDATE productos SET  Nombre='$Nombre',Stock='$Stock',Precio='$Precio' WHERE id_producto='$id_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
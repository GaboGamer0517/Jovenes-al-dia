<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM carrito WHERE id_carrito='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:carrito.php");

}
?>
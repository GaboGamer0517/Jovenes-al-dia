<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM productos WHERE id_productos='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:productos.php");

}
?>
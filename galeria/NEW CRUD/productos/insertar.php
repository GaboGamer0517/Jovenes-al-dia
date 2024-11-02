<?php
include_once("Conectar.php");
$id_productos=$_POST['id_productos'];
$Producto=$_POST['Producto'];
$Valor=$_POST['Valor'];

$sql="INSERT INTO productos VALUES ('$id_productos','$Producto','$Valor')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:productos.php");
 }
else 
{
    //
}
?>
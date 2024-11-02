<?php
include_once("Conectar.php");
$id_carrito=$_POST['id_carrito'];
$valor=$_POST['valor'];
$Cantidad=$_POST['Cantidad'];
$Id_roles=$_POST['Id_roles'];


$sql="INSERT INTO carrito VALUES ('$id_carrito','$valor','$Cantidad')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:carrito.php");
 }
else 
{
    //
}
?>
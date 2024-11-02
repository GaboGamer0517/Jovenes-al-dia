<?php
include_once("Conectar.php");
$id_eventos=$_POST['id_eventos'];
$tipo_evento=$_POST['tipo_evento'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO eventos VALUES ('$id_eventos','$tipo_evento','$fecha')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:eventos.php");
 }
else 
{
    //
}
?>
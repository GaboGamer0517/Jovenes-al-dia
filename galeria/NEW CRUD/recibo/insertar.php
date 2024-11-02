<?php
include_once("Conectar.php");
$id_recibo=$_POST['id_recibo'];
$Fecha=$_POST['Fecha'];
$Valor=$_POST['Valor'];
$Cantidad=$_POST['Cantidad'];
$transaccion=$_POST['transaccion'];


$sql="INSERT INTO recibo VALUES ('$id_recibo','$Fecha','$Valor','$Cantidad', '$transaccion')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:recibo.php");
 }
else 
{
    //
}
?>
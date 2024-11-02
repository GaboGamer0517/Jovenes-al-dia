<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM recibo WHERE id_recibo='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:recibo.php");

}
?>
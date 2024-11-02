<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM administrador WHERE id_administrador='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:Administrador.php");

}
?>
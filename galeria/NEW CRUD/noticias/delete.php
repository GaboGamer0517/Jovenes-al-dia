<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM noticias WHERE id_noticias='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:noticias.php");

}
?>
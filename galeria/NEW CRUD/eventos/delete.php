<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM eventos WHERE id_eventos='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:eventos.php");

}
?>
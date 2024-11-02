<?php
include_once("Conectar.php");
$id=$_GET['id'];
$sql="DELETE FROM registro_usuarios WHERE id='$id'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:registro_usuarios.php");

}
?>
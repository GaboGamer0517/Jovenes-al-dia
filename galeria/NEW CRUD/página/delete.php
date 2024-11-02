<?php
include_once("Conectar.php");
$di=$_GET['id'];
$sql="DELETE FROM página WHERE id_pagina='$di'";
$query=mysqli_query($micon->conexion,$sql);
if($query)
{
    header("location:página.php");

}
?>
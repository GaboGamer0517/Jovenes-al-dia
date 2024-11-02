<?php
include_once("Conectar.php");
$id_pagina=$_POST['id_pagina'];
$servicios=$_POST['servicios'];
$ayuda=$_POST['ayuda'];
$administrador=$_POST['administrador'];
$Id_roles=$_POST['Id_roles'];


$sql="INSERT INTO página VALUES ('$id_pagina','$servicios','$ayuda','$administrador')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:página.php");
 }
else 
{
    //
}
?>
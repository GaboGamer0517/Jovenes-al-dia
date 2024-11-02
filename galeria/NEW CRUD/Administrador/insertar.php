<?php
include_once("Conectar.php");
$id_administrador=$_POST['id_administrador'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$Teléfono=$_POST['Teléfono'];


$sql="INSERT INTO administrador VALUES ('$id_administrador','$email','$nombre','$Teléfono')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:Administrador.php");
 }
else 
{
    //
}
?>
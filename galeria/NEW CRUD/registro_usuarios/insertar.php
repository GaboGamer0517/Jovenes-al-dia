<?php
include_once("Conectar.php");
$id=$_POST['id'];
$Usuario=$_POST['Usuario'];
$Nombre=$_POST['Nombre'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];


$sql="INSERT INTO registro_usuarios VALUES ('$id','$Usuario','$Nombre','$email' ,'$contraseña')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:registro_usuarios.php");
 }
else 
{
    //
}
?>
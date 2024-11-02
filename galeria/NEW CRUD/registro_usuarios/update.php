<?php
include_once("conectar.php");
$id =$_POST['id'];
$Usuario=$_POST['Usuario'];
$Nombre=$_POST['Nombre'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];


$sql="UPDATE registro_usuarios SET  id ='$id',Usuario='$Usuario',Nombre='$Nombre',email='$email',contraseña='$contraseña' WHERE id='$id'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:registro_usuarios.php");
    }

?>
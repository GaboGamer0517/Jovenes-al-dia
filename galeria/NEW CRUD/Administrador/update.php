<?php
include_once("conectar.php");
$id_administrador =$_POST['id_administrador'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$Teléfono=$_POST['Teléfono'];



$sql="UPDATE administrador SET  id_administrador ='$id_administrador',email='$email',nombre='$nombre',Teléfono='$Teléfono' WHERE id_administrador='$id_administrador'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:Administrador.php");
    }

?>
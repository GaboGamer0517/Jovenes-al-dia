<?php
include_once("conectar.php");
$id_productos =$_POST['id_productos'];
$Producto=$_POST['Producto'];
$Valor=$_POST['Valor'];



$sql="UPDATE productos SET  id_productos ='$id_productos',Producto='$Producto',Valor='$Valor' WHERE id_productos='$id_productos'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:productos.php");
    }

?>
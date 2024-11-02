<?php
include_once("conectar.php");
$id_carrito =$_POST['id_carrito'];
$valor=$_POST['valor'];
$Cantidad=$_POST['Cantidad'];



$sql="UPDATE carrito SET  id_carrito ='$id_carrito',valor='$valor',Cantidad='$Cantidad' WHERE id_carrito='$id_carrito'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:carrito.php");
    }

?>
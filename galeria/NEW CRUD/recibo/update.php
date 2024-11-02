<?php
include_once("conectar.php");
$id_recibo =$_POST['id_recibo'];
$Fecha=$_POST['Fecha'];
$Valor=$_POST['Valor'];
$Cantidad=$_POST['Cantidad'];



$sql="UPDATE recibo SET  id_recibo ='$id_recibo',Fecha='$Fecha',Valor='$Valor',Cantidad='$Cantidad' WHERE id_recibo='$id_recibo'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:recibo.php");
    }

?>
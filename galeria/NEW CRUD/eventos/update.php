<?php
include_once("conectar.php");
$id_eventos =$_POST['id_eventos'];
$tipo_evento=$_POST['tipo_evento'];
$fecha=$_POST['fecha'];



$sql="UPDATE eventos SET  id_eventos ='$id_eventos',tipo_evento='$tipo_evento',fecha='$fecha' WHERE id_eventos='$id_eventos'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:eventos.php");
    }

?>
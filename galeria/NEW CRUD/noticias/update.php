<?php
include_once("conectar.php");
$id_noticias =$_POST['id_noticias'];
$tipo_noticia=$_POST['tipo_noticia'];
$fecha=$_POST['fecha'];



$sql="UPDATE noticias SET  id_noticias ='$id_noticias',tipo_noticia='$tipo_noticia',fecha='$fecha' WHERE id_noticias='$id_noticias'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:noticias.php");
    }

?>
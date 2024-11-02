<?php
include_once("Conectar.php");
$id_noticias=$_POST['id_noticias'];
$tipo_noticia=$_POST['tipo_noticia'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO noticias VALUES ('$id_noticias','$tipo_noticia','$fecha')";
$query=mysqli_query($micon->conexion,$sql);

if($query)
{
    header("Location:noticias.php");
 }
else 
{
    //
}
?>
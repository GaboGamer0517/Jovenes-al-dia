<?php
include_once("conectar.php");
$id_pagina =$_POST['id_pagina'];
$servicios=$_POST['servicios'];
$ayuda=$_POST['ayuda'];
$administrador=$_POST['administrador'];



$sql="UPDATE página SET  id_pagina ='$id_pagina',servicios='$servicios',ayuda='$ayuda',administrador='$administrador' WHERE id_pagina='$id_pagina'";
$query= mysqli_query($micon->conexion,$sql);

if($query)
   {
    header("Location:página.php");
    }

?>
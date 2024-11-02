<?php
include_once("Conectar.php");
$sql = "SELECT *  FROM productos";
$query = mysqli_query($micon->conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> PAGINA USUARIOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body bgcolor="cyan">
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">BASE DE DATOS</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../../index.html#portfolio">Ingresar a la base de datos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../../index.html#about">Publicidad Huerta</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../../../index.html#contact">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container mt-5"><br><br><br><br>
        <div class="row"><br><br><br><br>
<br>
            <div class="col-md-4  p-3 mb-2 p-3 mb-2 bg-info text-dar ">
                <h1 style='text-shadow: 5px 2px 3px indianred; font-family: Felix Titling'>INGRESE SUS DATOS </h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="id_productos" placeholder="id_productos">
                    <input type="text" class="form-control mb-3" name="Producto" placeholder="Producto">
                    <input type="text" class="form-control mb-3" name="Valor" placeholder="Valor">
                  
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8  ">
                <table class="table">
                    <thead class="table-success table-striped table-primary">
                        <tr>
                            <th>id_productos</th>
                            <th>Producto</th>
                            <th>Valor</th>
                           
                            <th>editar</th>
                            <th>eliminar</th>
                    </thead>

                    <tbody class="table-striped table-primary">
                        <?php


                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row[0] ?></th>
                                <th><?php echo $row[1] ?></th>
                                <th><?php echo $row[2] ?></th>
                    
                               


                                <th><a href="actualizar.php?id=<?php echo $row[0] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row[0] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
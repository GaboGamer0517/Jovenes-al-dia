<?php
include_once("Conectar.php");
$id = $_GET['id'];
$sql = "SELECT * FROM registro_usuarios WHERE id ='$id'";
$query = mysqli_query($micon->conexion, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
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
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

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

    <div class="container"> <br><br><br><br>
        <div class="row"><br><br><br><br>
        <br><br><br><br>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h1 style='text-shadow: 5px 2px 3px indianred; font-family: Felix Titling'>ACTUALIZAR DATOS </h1>
            </div>
            <div class="col-sm-12 col-md-8  p-3 mb-2 p-3 mb-2 bg-info text-dar">
                <form action="update.php" method="POST">
                    <h3>id</h3> 
                    <input type="text" class="form-control mb-3" name="id" placeholder="Password" value="<?php echo $row['0']  ?>">
                    <h3>Usuario</h3>
                    <input type="text" class="form-control mb-3" name="Usuario" placeholder="Password" value="<?php echo $row['1']  ?>">
                    <h3>Nombre</h3>
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Password" value="<?php echo $row['2']  ?>">
                    <h3>email</h3>
                    <input type="text" class="form-control mb-3" name="email" placeholder="Password" value="<?php echo $row['3']  ?>">
                    <h3>contraseña</h3>
                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="Password" value="<?php echo $row['4']  ?>">
                  
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>

            </div>
        </div>

    </div>
</body>

</html>
<?php
include "../conexion/conexion.php";
$libros = mysqli_query($conexion, "SELECT * FROM Libros");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>HPM | Libros</title>
</head>
<body>
    <!-- Inicio Navbar-->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">itales</h5>
            <span class="text-muted">c:</span>
            <h5 class="text-white h4">Sistema de libros digitales
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Fin Navbar-->
    <!--inicio carrusel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/img/1.gif" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../assets/img/biblio2.png" class="d-block w-100" width="700" height="810">
                <div class="carousel-caption">
                    <h1 id='visor_imagenes'>
                        <font face="Arial"><b>BIENVENIDO AL SISTEMA DE LIBROS DIGITALES HPM</b></font>
                    </h1>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Fin carrusel-->
    <!-- Barra izquieda -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <center><button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Libros</button></center>
            <a type="button" class="btn btn-secondary" href="logout.php" type="button">Salir de edición</a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Títulos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        Selecciona el título del libro que deseas consultar.
                    </div><br>
                    <?php foreach ($libros as $row):?>
                        <a class="btn" style="text-align: left;" href="#<?php echo $row["titulo"]; ?>" type="button"> <img src="https://img.icons8.com/cotton/24/000000/read.png" /> <?php echo $row["titulo"]; ?></a><br><br>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </nav><br><br>
    <!-- inicio barra izquierda -->
    <!-- Fin barra izquierda-->
    <!-- Inicio contenido-->
    <center>
        <h1>Biblioteca digital</h1><br>
        <h2> Contenenido</h2>
    </center><br>
    <!-- Inicio barra izquierda-->
    <div class="container">
        <div class="row">
            <div class="col-9 offset-2">
                <table class="table" id="libros">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $row) : ?>
                            <tr>
                                <th>
                                <h5 style="display: none;"><?php echo $row["id_libro"]; ?></h5>
                                    <h5 style="display: none;"><?php echo $row["titulo"]; ?></h5>
                                    <div class="card border-secondary mb-6" style="max-width: 800px;">
                                        <div class="row g-1">
                                            <div class="col-md-4">
                                                <img src="archivos/<?php echo $row["img"]; ?>" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $row["titulo"]; ?></h5>
                                                    <p class="card-text"><?php echo $row["autor"]; ?></p>
                                                    <p style="text-align: justify;" class="card-text"><small class="text-muted"><?php echo $row["descripcion"]; ?></small></p>
                                                    <a type="button" class="btn btn-danger" href="modificar.php?id=<?= $row["Id_libro"]; ?>">Modificar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                </th>
                            </tr> <?php endforeach; ?> 
                    </tbody>
                </table><br><br> 
            </div>
        </div>
        <!-- Fin -->
    </div>
    <!-- Fin contenido-->
    <!-- Scripts -->

    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.css" />
    <script type="text/javascript" src="../assets/DataTables/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $('#libros').DataTable();
        });
    </script>
</body>
</html>
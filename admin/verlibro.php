<?php
include ("../conexion/conexion.php");
//@session_start();
//if (!isset($_SESSION["Username"])) header("Location: login1.php");
$Id_libro = $_GET["Id_libro"];
$libros = mysqli_query($conexion, "SELECT archivo FROM libros WHERE Id_libro = $Id_libro");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="../assets/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <title>Acceso a libros</title>
</head>
<body>
    <!-- Inicio Navbar-->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4"></h5>
            <span class="text-muted">c:</span>
            <h5 class="text-white h4">Lectura
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a href="logout.php">salir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Fin Navbar-->
    <div class="col-md-10 offset-1">
        <?php foreach ($libros as $dat): ?>
            <iframe src="../archivos/<?php echo $dat["archivo"]; ?>"  width="1070" height="750"></iframe>
        <?php endforeach; ?>
    </div>
    <script type="text/javascript" src="login1.js"></script>
    <script src="../assets/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=es&widgetTheme=dark&autoMode=false" type="text/javascript"></script>   
</body>
</html>
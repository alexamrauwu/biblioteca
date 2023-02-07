<?php
include "../conexion/conexion.php";
$libros = mysqli_query($conexion, "SELECT * FROM Libros");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="../assets/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    <title>HPM | Libros</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a type="button" class="btn btn-secondary" href="admin/index.html" type="button">Salir</a>
        </div>
    </nav><br><br>
    <!-- inicio barra izquierda -->
    <!-- Fin barra izquierda-->
    <!-- Inicio contenido-->
    <center>
        <h1>Añadir nuevo libro</h1><br>   
    </center><br>
    <!-- Inicio barra izquierda-->
    <div class="container">
        <div class="row">
            <div class="col-9 offset-2">
              <form action="add.php"  method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título del libro</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Título">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor del libro</label>
                    <input type="text" class="form-control"  name="autor" placeholder="Nombre del autor">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Documento digital</label>
                    <input class="form-control form-control-lg" name="archivo" type="file">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Portada del libro</label>
                    <input class="form-control form-control-lg"  name="img" type="file">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control"  name="descripcion" rows="3"></textarea>
                </div>
               <center> <button type="submit" name="guardar" id="guardar" class="btn btn-danger">Guardar</button></center> <br><br>
              </form>
            </div>
        </div>
        <!-- Fin -->
    </div>
    <!-- Fin contenido-->
    <!-- Scripts -->
<script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=es&widgetTheme=dark&autoMode=false" type="text/javascript"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    

</body>
</html>
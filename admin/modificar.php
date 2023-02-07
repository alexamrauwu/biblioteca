<?php
include ("../conexion/conexion.php");
$id_libro = $_GET['id'];
$libros = mysqli_query($conexion, "SELECT * FROM libros WHERE Id_libro = $id_libro");
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
    <title>HPM | Libros</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a type="button" class="btn btn-secondary" href="admin/index.html" type="button">Salir</a>        </div>
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
                 <?php foreach ($libros as $dat); ?>
              <form action="mod.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                    <input style="display: none;" type="text" class="form-control" id="Id_libro" name="Id_libro" value="<?php echo $dat['Id_libro']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $dat['titulo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor del libro</label>
                    <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $dat['autor']; ?>">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Documento digital</label>
                    <input class="form-control form-control-lg" id="archivo" name="archivo"  value="<?php echo $dat['archivo']; ?>" type="file">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Portada del libro</label>
                    <input class="form-control form-control-lg" id="img" name="img"  value="<?php echo $dat['img']; ?>" type="file">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion"  value="<?php echo $dat['descripcion']; ?>" rows="3"></textarea>
                </div>
               <center><input class="btn btn-danger" type="submit" id="aceptar" name="aceptar" ></center> <br><br>
            </div>
         </form>
        </div>
        <!-- Fin -->
    </div>
    <!-- Fin contenido-->
    <!-- Scripts -->
</body>
</html>
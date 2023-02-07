<?php
include ("../conexion/conexion.php");
$Id_libro = $_GET["Id_libro"];
$query = mysqli_query($conexion, "SELECT * FROM libros WHERE Id_libro = '$Id_libro'");
$data = mysqli_fetch_assoc($query);
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
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
                <br><br><br><br>
                <center>
                    <img src="../img/logo.png" alt="Logo" style="width:50%;height:auto;">
                    <h3>Inicia sesion para continuar</h3>
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <form action="">
                                <input value="<?php echo $data['Id_libro'];?>" name="Id_libro" id="Id_libro" style="display: none; ">
                                <div class="form-group">
                                    <label for="nombre">Usuario</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="passw">Clave</label>
                                    <input type="password" class="form-control" id="passw" name="passw" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <br>
                                    <button type="button" name="acceder1" id="acceder1" class="btn btn-primary">Acceder <i class="fa fa-angellist"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
            </div>  
        </div> 
    </div>
    <script type="text/javascript" src="login1.js"></script>
    <script src="../assets/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=es&widgetTheme=dark&autoMode=false" type="text/javascript"></script>   
</body>
</html>
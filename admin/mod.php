<?php
include("../conexion/conexion.php");
require "../conexion/config.inc.php";


$id = $_POST["Id_libro"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$descripcion = $_POST["descripcion"];
$nombre = $_FILES['archivo']['name'];
$ruta = $_FILES['archivo']['tmp_name'];
$destino = "../archivos/" . $nombre;
$nombre2 = $_FILES['img']['name'];
$ruta2 = $_FILES['img']['tmp_name'];
$destino2 = "../archivos/" . $nombre2;$titulo = $_POST['titulo'];
$autor = $_POST['autor'];

if(isset($_POST['aceptar']))// SI SE PRESIONA EL BOTÓN INSERTAR OCURRE LO SIGUIENTE:
{

  if(empty($_POST['archivo'])){
    
    if(empty($_POST['img'])){
      //insercion de todos los datos//
      $insertar=$conexion->query("UPDATE libros SET titulo = '$titulo', autor = '$autor', descripcion = '$descripcion' WHERE Id_libro = '$id'");

      if ($insertar==true){// SI LA QUERY ANTERIOR SE EJECUTA CON EXITO
        echo"<script type=\"text/javascript\">alert('¡ Guardado Exitosos !'); window.location='index.php';</script>";
      }else{
      echo "Error";
          //echo"<script type=\"text/javascript\">alert('El registro no se puede guardar :( '); window.location='index.php';</script>";
      }

    }else{
      
      //insercion de todos los datos junto con la imagen menos el archivo//
      if (copy ($ruta2, $destino2)){
        $db=new Conect_MySql();
         $sql = "UPDATE libros SET img = '$nombre2' WHERE Id_libro = '$libro'";
         $query = $db->execute($sql);
           if($query){

         echo"<script type=\"text/javascript\">alert('¡ OK :D !'); window.location='index.php';</script>";

         }
      }

    } 

  }else{
    //insercion de todos los datos junto con el archivo//
    if (copy ($ruta, $destino)){
      $db=new Conect_MySql();
      $sql = "INSERT INTO libros (titulo, autor, descripcion, archivo ) VALUES ('$libro', '$autor', '$descripcion', '$nombre')";
      $query = $db->execute($sql);
    
      if ($query){
        //insercion de la imagen//
           if ($nombre2 != "" ){
             if (copy ($ruta2, $destino2)){
              $db=new Conect_MySql();
               $sql = "UPDATE libros SET img = '$nombre2' WHERE Id_libro= '$id'";
               $query = $db->execute($sql);
                 if($query){
    
               echo"<script type=\"text/javascript\">alert('¡ OK :D !'); window.location='index.php';</script>";
    
               }
            }
    
          }
       }
     }

  }
}

?>
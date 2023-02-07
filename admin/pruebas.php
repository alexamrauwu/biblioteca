<?php

include ("../conexion/conexion.php");
include ("../conexion/config.inc.php");

	if (isset($_POST['guardar'])) {
        $nombre = $_FILES['archivo']['name'];
        $ruta = $_FILES['archivo']['tmp_name'];
        $destino = "../archivos/" . $nombre;
        $nombre2 = $_FILES['img']['name'];
        $ruta2 = $_FILES['img']['tmp_name'];
        $destino2 = "../archivos/" . $nombre2;

        if ($nombre != "" ){
          if (copy ($ruta, $destino)){
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $descripcion = $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO libros (titulo, autor, descripcion, archivo ) VALUES ('$titulo', '$autor', '$descripcion', '$nombre')";
            $query = $db->execute($sql);
            
            if ($query){
  
                 if ($nombre2 != "" ){
                   if (copy ($ruta2, $destino2)){
                    $db=new Conect_MySql();
                     $sql2 = "UPDATE libros SET img = '$nombre2' WHERE titulo = '$titulo'";
                     $query2 = $db->execute($sql2);
                       if($query){

                     echo"<script type=\"text/javascript\">alert('¡ OK :D !'); window.location='new.php';</script>";

                     }
                  }
                }
             }
           }
        }
    } 
?>
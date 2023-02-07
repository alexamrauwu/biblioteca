<?php
 
    include("../conexion/conexion.php");

   	if(!empty($_POST)){

      $user = $_POST["usuario"];
      $pass = $_POST["pass"];

      $query = mysqli_query($conexion, "SELECT * FROM acceso WHERE Username = '$user' AND Passw = MD5('$pass')");

   		if($query->num_rows>0){

   			while($row = mysqli_fetch_array($query)){

   				@session_start();
   				$_SESSION["id"]=$row["Id_user"];
                echo true;
   			}

   		}else{

            echo false;

        }

   	}

?>
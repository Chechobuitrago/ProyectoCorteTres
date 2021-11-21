<?php
    include "conexion.php";
    
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];
    
try{
    $sql = "SELECT email, contrasena FROM usuario WHERE correo='$correo' and contrasena = '$contrasena'";
    $result = mysqli_query($conexion,$sql) or die();
	$rows = mysqli_num_rows($result);
        if($rows==1){
            header("Location: index.html");
         }else{
            echo "ALGO SALIO MAL";
         }

    } catch( Exception $e){
        echo "<pre>";
        var_dump($e);
        echo "</pre>";
        
    }

?>
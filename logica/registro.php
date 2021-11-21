<?php
include "conexion.php";
$mysqli = new mysqli("sql10.freesqldatabase.com", "sql10451838","WpkN1HRMC7","sql10451838");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contrasena = $_POST['contrasena'];



try{
$sql = "INSERT INTO usuario(id_usuario,nombre,correo,telefono,direccion,contrasena) 
      VALUES ('$id','$nombre','$correo','$telefono','$direccion','$contrasena')";
$resultado = $mysqli->query($sql);
echo "<meta http-equiv='refresh' content='0; url=../presentacion/login.html'>";
} catch( Exception $e){
	echo "<pre>";
	var_dump($e);
	echo "</pre>";
	
}

		

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";

//echo "<meta http-equiv='refresh' content='0; url=nuevo.php'>";
?>
<!--if(filter_var(($correo, FILTER_VALIDATE_EMAIL)){
	mail("ejemplo@me.com",$correo,$codigo,$usuario,$contrasena,$fecha);
	header("home.php?cod_usuario=correcto");
}else
{
header("home.php?cod_usuario=incorrect0");
	{
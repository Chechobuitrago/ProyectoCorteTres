<?php
try{
$conexion = mysqli_connect( "sql10.freesqldatabase.com", "sql10451838","WpkN1HRMC7","sql10451838");
mysqli_set_charset($conexion,"utf8");
return $conexion;
echo "sii";
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
?>
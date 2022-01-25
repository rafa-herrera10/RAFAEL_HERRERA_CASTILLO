<?php
include "Ej1_0_conexionBD.php";

//Creamos la base de datos
$base="CREATE DATABASE BD1_TEMA4_RHC";
$resultado=mysqli_query($conexion, $base);


//Y ponemos el resultado cuando se haya creado la base de datos
if($resultado)
echo "Se ha creado con éxito la base de datos empresa";

mysqli_close($conexion);


?>
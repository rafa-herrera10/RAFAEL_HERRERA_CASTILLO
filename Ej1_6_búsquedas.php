<?php
include "Ej1_0_conexionBD.php";

//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");


//Haremos algunos select para buscar información
$busqueda1 = mysqli_query($conexion, "SELECT * FROM USUARIO1");

$busqueda2 = mysqli_query($conexion, "SELECT * FROM AULA2");

$busqueda3 = mysqli_query($conexion, "SELECT * FROM CURSO3");

$busqueda4 = mysqli_query($conexion, "SELECT * FROM EDIFICIO4");

mysqli_free_result($busqueda1);

mysqli_free_result($busqueda2);

mysqli_free_result($busqueda3);

mysqli_free_result($busqueda4);


mysqli_close($conexion);

?>
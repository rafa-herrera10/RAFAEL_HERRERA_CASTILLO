<?php
include "Ej1_0_conexionBD.php";

//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");

//Borramos alguna información para esta prueba
mysqli_query($conexion, "DELETE FROM USUARIO1 WHERE EDAD =50");
mysqli_query($conexion, "DELETE FROM AULA2 WHERE PLANTA = 1");
mysqli_query($conexion, "DELETE FROM CURSO3 WHERE CODIGO =99");
mysqli_query($conexion, "DELETE FROM EDIFICIO4 WHERE NOMBRE = 'Empires States'");


mysqli_close($conexion);
?>
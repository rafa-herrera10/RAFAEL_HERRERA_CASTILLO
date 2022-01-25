<?php
include "Ej1_0_conexionBD.php";

//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");


//Actualizamos los datos
mysqli_query($conexion, "UPDATE USUARIO1
SET Nombre = 'Pepe', Apellido= 'Guardiola', Edad = '50', Dirección = 'Manchester'"); 

mysqli_query($conexion, "UPDATE AULA2
SET Nombre = 'Aula', Numero= '9', Planta = '1', Descripción = 'Inglés'");

mysqli_query($conexion, "UPDATE CURSO3
SET Código = '99', Nombre= 'Matemáticas', Matemáticas académicas. = '50', Horas = '100'");

mysqli_query($conexion, "UPDATE EDIFICIO4
SET Nombre = 'Empires States', Descripción= 'Muy alto'");

mysqli_close($conexion);

?>
<?php
include "Ej1_0_conexionBD.php";

//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");


//Actualizamos los datos de las tablas
mysqli_query($conexion, "UPDATE USUARIO1
SET Nombre = 'Pepe', Apellidos= 'Guardiola', Edad = '50', Dirección = 'Manchester'"); 

mysqli_query($conexion, "UPDATE AULA2
SET Nombre = 'Aula', Numero= '9', Planta = '1', Descripcion = 'Inglés'");

mysqli_query($conexion, "UPDATE CURSO3
SET Codigo = '99', Nombre= 'Matemáticas', Descripcion='Matemáticas académicas.', Horas = 100");

mysqli_query($conexion, "UPDATE EDIFICIO4
SET Nombre = 'Empires States', Descripcion= 'Muy alto'");


mysqli_close($conexion);
?>
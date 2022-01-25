<?php
include "Ej1_0_conexionBD.php";
//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");


//Insertamos los datos en las tablas que hemos creado con el mismo procedimiento de que cuando creamos las tablas.
mysqli_query($conexion, "INSERT INTO usuario1(Nombre, Apellidos, Edad, Dirección, Email)
VALUES('Cristian', 'Escobar Torres', 24, 'Calle Nueva nº 50', 'cristianescobartorres@gmail.com')");

mysqli_query($conexion, "INSERT INTO AULA2(nombre, numero, planta, descripcion)
VALUE ('Musica', 120, 2, 'equipada con instrumentos')");

mysqli_query($conexion, "INSERT INTO CURSO3(codigo, nombre, descripcion, horas)
VALUE (4158, 'ASIR', 'equipada con equipos informaticos', 34)");

mysqli_query($conexion, "INSERT INTO EDIFICIO4(nombre, descripcion)
VALUE ('edificio 2', 'es el mas nuevo y tiene 3 plantas, en el estan los grados superiores')");


mysqli_query($conexion, "INSERT INTO EDIFICIO20(nombre, descripcion)
VALUE ('edificio 1', 'es el mas nuevo y tiene 5 plantas, en el estan los grados superiores')");


mysqli_close($conexion);
?>
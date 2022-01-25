<?php
include "Ej1_0_conexionBD.php";
//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");


//Procedemos a crear las tablas
mysqli_query($conexion, "CREATE TABLE USUARIO1
    Nombre varchar(255),
    Apellidos varchar(255),
    Edad Number(3),
    Dirección varchar(255),
    Email varchar(255)"); 

mysqli_query($conexion, "CREATE TABLE AULA2 (
    Nombre varchar(255),
    Numero Number(3),
    Planta varchar(255),
    Descripcion varchar(255)"
);

mysqli_query($conexion, "CREATE TABLE CURSO3 (
    Codigo Number(4),
    Nombre varchar(255),
    Descripcion varchar(255),
    Horas Number(4)"
);


mysqli_query($conexion, "CREATE TABLE EDIFICIO4 (
    Nombre varchar(255),
    Descripcion varchar(255)"
);

mysqli_query($conexion, "CREATE TABLE EDIFICIO20 (
    Nombre varchar(255),
    Descripcion varchar(255)"
);

mysqli_close($conexion);

?>
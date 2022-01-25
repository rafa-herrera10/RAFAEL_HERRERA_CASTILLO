<?php
//Primero tenemos que crear las variables para la conexión con la base de datos
$host="localhost";
$user="root";
$passwd="";

//Creamos la conexión a la BD.
$conexion = mysqli_connect($host, $user, $passwd);

//Ponemos condición por si falla o se ha conectado correctamente
if (!$conexion) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
    }
    else {
    echo 'Éxito ' . mysqli_get_host_info($conexion);
    }

?>
<?php
//Primero tenemos que crear las variables para la conexión
$crear = "create";
$editar = "update";
$borrar = "delete";
$consultar = "select";

//Creamos la conexión a la BD.
$conexion = $mysqli_connect($crear, $editar, $borrar, $consultar);

//Ponemos condición por si falla
if (!$conexion) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
    }
    echo 'Éxito' . mysqli_get_host_info($conexion);

?>
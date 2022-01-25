<?php
//En cada archivo tenemos que llamar al archivo que está aquí escrito ya que tiene la función de conectarse a la Base de Datos.
include "Ej1_0_conexionBD.php";

//Creamos la base de datos
$base="CREATE DATABASE BD1_TEMA4_RHC";
$resultado=mysqli_query($conexion, $base);


//Y ponemos el resultado cuando se haya creado la base de datos
if($resultado){
echo " Se ha creado con éxito la base de datos BD1_TEMA4_RHC";
}

//Escribimos esta instrucción para que termine la conexión con la BD. Esto no pasa nada ya que en cada archivo vuelve a habilitar la conexión a ella. 
//En cada fichero está esta instrucción.
mysqli_close($conexion);


?>
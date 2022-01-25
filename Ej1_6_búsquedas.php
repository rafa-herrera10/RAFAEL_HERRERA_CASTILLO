<?php
include "Ej1_0_conexionBD.php";

//Establecemos la conexion con la base de datos
mysqli_select_db($conexion, "BD1_TEMA4_RHC");


//Creamos la variable para meter la informacion y que nos muestre esta en el terminal de Visual Studio.
//Hacemos que se meta la instrucción en una variable y luego hacemos un bucle para que imprima la información.
//Hay muchos echos ya que he dado formato para que se vea todo más bonito.

$busqueda1 = mysqli_query($conexion, "SELECT * FROM USUARIO1");

while($tupla = mysqli_fetch_assoc($busqueda1)) {
    echo "\n";
    echo "USUARIO1";
    echo "\n";
    echo $tupla["Nombre"]. " " .$tupla["Apellidos"]." ".$tupla["Edad"]." ".$tupla["Dirección"]." ".$tupla["Email"]. "\n";
    }

$busqueda2 = mysqli_query($conexion, "SELECT * FROM AULA2");

while($tupla = mysqli_fetch_assoc($busqueda2)) {
    echo "\n";
    echo "AULA2";
    echo "\n";
    echo $tupla["Nombre"]. " " .$tupla["Numero"]." ".$tupla["Planta"]." ".$tupla["Descripcion"]. "\n";
    }

$busqueda3 = mysqli_query($conexion, "SELECT * FROM CURSO3");

while($tupla = mysqli_fetch_assoc($busqueda3)) {
    echo "\n";
    echo "CURSO3";
    echo "\n";
    echo $tupla["Codigo"]. " " .$tupla["Nombre"]." ".$tupla["Descripcion"]." ".$tupla["Horas"]. "\n";
    }

$busqueda4 = mysqli_query($conexion, "SELECT * FROM EDIFICIO4");

while($tupla = mysqli_fetch_assoc($busqueda4)) {
    echo "\n";
    echo "EDIFICIO4";
    echo "\n";
    echo $tupla["Nombre"]. " " .$tupla["Descripcion"];
    }


mysqli_free_result($busqueda1);

mysqli_free_result($busqueda2);

mysqli_free_result($busqueda3);

mysqli_free_result($busqueda4);

mysqli_close($conexion);
?>
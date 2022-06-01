<?php
//Datos de la bd
$hostname = "localhost";
$username = "root";
$password = "";
$database = "tienda";
//Query para la conecxion 
$conexion = mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_error()){
    echo "conexion fallida";
}
else {
    echo "conexion exitosa";
}
?>
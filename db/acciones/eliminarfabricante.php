<?php

   include('../conect.php');

   $codigoFabricante = $_GET['id'];

   $eliminarfabricante = "DELETE FROM fabricante WHERE codigo = '$codigoFabricante'";
   $resultado = 
       mysqli_query ($conexion,$eliminarfabricante);

       header('Location: ../fabricantes.php');
?>
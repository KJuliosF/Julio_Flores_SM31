<?php

   include('../conect.php');

   $codigoproducto = $_GET['id'];

   $eliminarproducto = "DELETE FROM producto WHERE codigo = '$codigoproducto'";
   $resultado = 
       mysqli_query ($conexion,$eliminarproducto);

       header('Location: ../productos.php');
       ?>fn 
<?php
   include("conect.php");

   if(isset($_POST['enviar'])){
       $nomProducto= $_POST['nomProducto'];
       $precio = $_POST['precio'];
       $codigo_fabricante = $_POST['codigo_fabricante'];


       $insertarProducto = 
       "INSERT INTO producto (nombre, precio, codigo_fabricante)
       VALUE ('$nomProducto', '$precio','$codigo_fabricante')";

       $resultad = 
       mysqli_query ($conexion,$insertarProducto);

       if(!$resultad){
           echo '<script>alert("Los datos no se insertaron")</script>';
       }else{
           echo '<script>alert("Los datos si se insertaron")
        </script>';
       }
    }
    header('location:productos.php')
?>
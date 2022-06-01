<?php
   include("conect.php");

   if(isset($_POST['enviar'])){
       $Nombre= $_POST['Nombre'];
       $ApellidoPaterno = $_POST['ApellidoPaterno'];
       $ApellidoMaterno = $_POST['ApellidoMaterno'];
       $Telefono = $_POST['Telefono'];
       $Correo = $_POST['Correo'];
       $Usuario = $_POST['Usuario'];
       $Clave = $_POST['Clave'];


       $insertarusuario = 
       "INSERT INTO usuario (Nombre, Apellido_Paterno, Apellido_Materno, Telefono, Correo, Usuario, Clave) 
       VALUE ('$Nombre', '$ApellidoPaterno','$ApellidoMaterno','$Telefono','$Correo','$Usuario','$Clave')";

       $resultad = 
       mysqli_query ($conexion,$insertarusuario);

       if(!$resultad){
           echo '<script>alert("Los datos no se insertaron")</script>';
       }else{
           echo '<script>alert("Los datos si se insertaron")
        </script>';
       }
    }
    header('location:usuario.php')
?>
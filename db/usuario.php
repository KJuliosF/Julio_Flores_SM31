<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
    <h1>Registro Usuarios</h1>
    <form action="registrousuario.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Nombre(s):</label>
          <input type="text" class="form-control" name="Nombre">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label class="form-label">Apellido Paterno:</label>
          <input type="text" class="form-control" name="ApellidoPaterno">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label class="form-label">Apellido Materno:</label>
          <input type="text" class="form-control" name="ApellidoMaterno">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label class="form-label">Telefono:</label>
          <input type="text" class="form-control" name="Telefono">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label class="form-label">Correo</label>
          <input type="text" class="form-control" name="Correo">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label class="form-label">Nombre de Usuario:</label>
          <input type="text" class="form-control" name="Usuario">
          <div class="form-text"></div>
        </div>
            <div class="mb-3">
              <label class="form-label">Contraseña:</label>
              <input type="text" class="form-control" name="Clave">
          <div class="form-text"></div>
            </div>
        <input type="submit" name="enviar" value="insertar usuario"class="btn btn-primary"></button>
    </form>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Clave</th>


    </tr>
  </thead>
  <tbody>
  <?php
include ('conect.php');
$consulta = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion,$consulta);

while($fila = mysqli_fetch_array($resultado)){
?>
<tr>
  <th scope="row"><?php echo $fila ["Nombre"]?></th>
  <td><?php echo $fila["Apellido_Paterno"]?></td>
  <td><?php echo $fila["Apellido_Materno"]?> </td>
  <td><?php echo $fila["Telefono"]?></td>
  <td><?php echo $fila["Correo"]?></td>
  <td><?php echo $fila["Usuario"]?></td>
  <td><?php echo $fila["Clave"]?></td>

  <!--Boton de Eliminar-->


</tr>
<?php }?>
</tbody>
</table>
</body>
</html>
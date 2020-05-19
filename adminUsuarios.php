<?php
  require 'config/config.php';
  require 'funciones/conexion.php';
  require 'funciones/usuarios.php';
  $usuarios = listarUsuarios();
	include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de usuarios</h1>
        
<a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>


<table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Estado</th>
            <th colspan="2"><a href="formAgregarUsuario.php" class="btn btn-dark">Agregar</a></th>
          </tr>
        </thead>

        <tbody>
          <?php
            while ($usuario = mysqli_fetch_assoc($usuarios)){
           ?>
          <tr>
            <td><?= $usuario['idUsuario'] ?></td>
            <td><?= $usuario['usuNombre'] ?></td>
            <td><?= $usuario['usuApellido'] ?></td>
            <td><?= $usuario['usuEmail'] ?></td>
            <td><?= $usuario['usuPass'] ?></td>
            <td><?= $usuario['usuEstado'] ?></td>
            <td><a href="formModificarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-outline-secondary">Modificar</a></td>
            <td><a href="" class="btn btn-outline-secondary">Eliminar</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>


<a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>
    </main>

<?php  include 'includes/footer.php';  ?>
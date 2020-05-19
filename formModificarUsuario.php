<?php
    require 'config/config.php';
    require 'funciones/conexion.php'; 
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar usuario</h1>
        <br>
        <div class="alert alert-secondary p-4 col-8">
        	<form method="post" action="modificarUsuario.php">

        		
    Nombre:<br>
  <input type="text" name="usuNombre" value="<?= $usuario['usuNombre'] ?>" class="form-control" required><br>

    Apellido:<br>
  <input type="text" name="usuApellido" value="<?= $usuario['usuApellido'] ?>" class="form-control" required><br>

    Email:<br>
  <input type="email" name="usuEmail" value="<?= $usuario['usuEmail'] ?>" class="form-control" required><br>

      Contraseña:<br>
  <input type="password" name="usuPass" value="<?= $usuario['usuPass'] ?>" class="form-control" required><br>

    Estado:<br>
  <input type="number" name="usuEstado" value="<?= $usuario['usuEstado'] ?>" class="form-control" required><br>

        		<br>
                <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">


        		<button class="btn btn-dark">Modificar</button>
        		<a href="adminUsuarios.php" class="btn btn-outline-secondary">Cancelar</a>

        	</form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
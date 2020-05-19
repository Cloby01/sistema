<?php
  require 'config/config.php';
  require 'funciones/conexion.php';
  require 'funciones/usuarios.php';
	include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de usuarios</h1>
        
<a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>


        <div class="alert alert-secondary p-8 col-8">
        	<form action="/usuarios.php">

  <label for="name">Usuario:</label><br>
  <input type="text" id="name" name="name" value="" class="form-control"><br>
  <label for="name">Contraseña:</label><br>
  <input type="password" id="contrasena" name="contrasena" class="form-control"><br>
  <button type="submit" class="btn btn-success btn-block">Crear</button>

        	</form>
        </div>


<a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>
    </main>

<?php  include 'includes/footer.php';  ?>
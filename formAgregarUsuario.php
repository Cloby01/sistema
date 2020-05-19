<?php
  require 'config/config.php';
  require 'funciones/conexion.php';
  require 'funciones/usuarios.php';
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

   <main class="container">
        <h1>Agregar un nuevo usuario</h1>
        
<a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>


        <div class="alert alert-secondary p-8 col-8">
        	<form method="post" action="agregarUsuario.php">

  	Nombre:<br>
  <input type="text" name="usuNombre" class="form-control" required><br>

    Apellido:<br>
  <input type="text" name="usuApellido" class="form-control" required><br>

    Email:<br>
  <input type="email" name="usuEmail" class="form-control" required><br>

      Contraseña:<br>
  <input type="password" name="usuPass" class="form-control" required><br>

    Estado:<br>
  <input type="number" name="usuEstado" class="form-control" required><br>



  <button class="btn btn-dark btn-block">Agregar</button>

        	</form>
        </div>


<a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>
    </main>
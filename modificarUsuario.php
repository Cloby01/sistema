<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modificarUsuario();
    include 'includes/header.html'; 
	include 'includes/nav.php';

?>

    <main class="container">
        <h1>Modificación de un usuario</h1>

		<?php 
		$class = 'danger'; //Este es el valor predeterminado
		$mensaje = 'No se pudo modificar el usuario<br><a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver</a>';

			if ($chequeo) { //Pero si es verdadero, entonces se cambia a este mensaje.
				$class = 'success';
				$mensaje = 'Usuario modificado correctamente<br><a href="adminUsuarios.php" class="btn btn-outline-secondary">Volver</a>';
			} // Tambien funciona con un else. Esto es una alternativa.
		 ?>

<div class="alert alert-<?= $class ?>">
	<?= $mensaje ?>
</div>

    </main>

<?php  include 'includes/footer.php';  ?>
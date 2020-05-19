<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
    include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';

?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>

		<?php 
		$class = 'danger'; //Este es el valor predeterminado
		$mensaje = 'No se pudo ingresar la marca<br><a href="adminMarcas.php" class="btn btn-outline-secondary">Volver</a>';

			if ($chequeo) { //Pero si es verdadero, entonces se cambia a este mensaje.
				$class = 'success';
				$mensaje = 'Marca agregada correctamente<br><a href="adminMarcas.php" class="btn btn-outline-secondary">Volver</a>';
			} // Tambien funciona con un else. Esto es una alternativa.
		 ?>

<div class="alert alert-<?= $class ?>">
	<?= $mensaje ?>
</div>

    </main>

<?php  include 'includes/footer.php';  ?>
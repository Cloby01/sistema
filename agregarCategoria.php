<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();
    include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';

?>

    <main class="container">
        <h1>Alta de una nueva categoría</h1>

		<?php 
		$class = 'danger'; //Este es el valor predeterminado
		$mensaje = 'No se pudo ingresar la categoría';

			if ($chequeo) { //Pero si es verdadero, entonces se cambia a este mensaje.
				$class = 'success';
				$mensaje = 'Categoría agregada correctamente';
			} // Tambien funciona con un else. Esto es una alternativa.
		 ?>

<div class="alert alert-<?= $class ?>">
	<?= $mensaje ?>
</div>

    </main>

<?php  include 'includes/footer.php';  ?>
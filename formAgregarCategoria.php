<?php
    require 'config/config.php';
	include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Agregar nueva categoría</h1>
        <br>
        <div class="alert alert-secondary p-4 col-8">
        	<form method="post" action="agregarCategoria.php"><!-- Si modifico es POST. Si no modifico es GET -->
        		Nombre de la categoría: <br>
        		<input type="text" name="catNombre" class="form-control" required>
        		<br>
        		<button class="btn btn-dark">Agregar</button>
        		<a href="adminCategorias.php" class="btn btn-outline-secondary">Cancelar</a>
        	</form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
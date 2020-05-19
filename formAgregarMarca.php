<?php
    require 'config/config.php';
	include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Agregar nueva marca</h1>
        <br>
        <div class="alert alert-secondary p-4 col-8">
        	<form method="post" action="agregarMarca.php"><!-- Si modifico es POST. Si no modifico es GET -->
        		Nombre de la marca: <br>
        		<input type="text" name="mkNombre" class="form-control" required>
        		<br>
        		<button class="btn btn-dark">Agregar</button>
        		<a href="adminMarcas.php" class="btn btn-outline-secondary">Cancelar</a>
        	</form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
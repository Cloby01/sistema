<?php
    require 'config/config.php';
    require 'funciones/conexion.php'; 
    require 'funciones/marcas.php';
    $marca = verMarcaPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar marca</h1>
        <br>
        <div class="alert alert-secondary p-4 col-8">
        	<form method="post" action="modificarMarca.php">
        		Nombre de la marca: <br>
        		<input type="text" name="mkNombre" value="<?= $marca['mkNombre'] ?>" class="form-control" required>
        		<br>
                <input type="hidden" name="idMarca" value="<?= $marca['idMarca'] ?>">
        		<button class="btn btn-dark">Modificar</button>
        		<a href="adminMarcas.php" class="btn btn-outline-secondary">Cancelar</a>
        	</form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
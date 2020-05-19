<?php
    require 'config/config.php';
    require 'funciones/conexion.php'; //Requiere conectarse
    require 'funciones/categorias.php'; //Requiere las marcas
    $categorias = listarCategorias();
	include 'includes/header.html';  //INCLUDE: sirve para incluir otro archivo, como en este caso es el header
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Categorías</h1>

        <a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>

			<table class="table table-bordered table-striped table-hover">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Categoria</th>
						<th colspan="2"><a href="formAgregarCategoria.php" class="btn btn-dark">Agregar</a></th>
					</tr>
				</thead>

				<tbody>
					<?php
						while ($categoria = mysqli_fetch_assoc($categorias)){
					 ?>
					<tr>
						<td><?= $categoria['idCategoria'] ?></td>
						<td><?= $categoria['catNombre'] ?></td>
						<td><a href="formModificarCategoria.php?idCategoria=<?= $categoria['idCategoria'] ?>" class="btn btn-outline-secondary">Modificar</a></td>
						<td><a href="" class="btn btn-outline-secondary">Eliminar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

        <a href="admin.php" class="btn btn-outline-secondary m-2">Volver al panel de admin</a>

    </main>

<?php  include 'includes/footer.php';  ?>
<?php
    require 'config/config.php';
    require 'funciones/conexion.php'; 
    require 'funciones/categorias.php';
    $categoria = verCategoriaPorID();
    include 'includes/header.html';  
    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar categoría</h1>
        <br>
        <div class="alert alert-secondary p-4 col-8">
            <form method="post" action="modificarCategoria.php">
                Nombre de la categoría: <br>
                <input type="text" name="catNombre" value="<?= $categoria['catNombre'] ?>" class="form-control" required>
                <br>
                <input type="hidden" name="idCategoria" value="<?= $categoria['idCategoria'] ?>">
                <button class="btn btn-dark">Modificar</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">Cancelar</a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
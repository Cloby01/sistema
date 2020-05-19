<?php 

## CRUD de categorias ##

function listarCategorias()
{

	$link = conectar();
	$sql = "SELECT idCategoria, catNombre FROM categorias";
	$resultado = mysqli_query($link, $sql) or die(mysqli_error ($link)); //Die hace que mate la ejecución, haciendo que si hay un error, no halla página.
	return $resultado;

}


function agregarCategoria ()
{
	$link = conectar();
	$catNombre = $_POST ['catNombre'];
	$sql = "INSERT INTO categorias ( catNombre ) VALUE ( '".$catNombre."' )";
	$resultado = mysqli_query($link, $sql);
	return $resultado;
}


function verCategoriaPorID () //Para consultar la id de una marca asi me aparece en el form
{
	$idCategoria = $_GET['idCategoria'];

	$link = conectar();
	$sql = "SELECT idCategoria, catNombre FROM categorias WHERE idCategoria = ".$idCategoria;

	$resultado = mysqli_query($link, $sql);
	$categoria = mysqli_fetch_assoc($resultado)
	or die (mysqli_error($link));
	return $categoria;

}

function modificarCategoria()
{
	$idCategoria = $_POST['idCategoria'];
	$catNombre = $_POST ['catNombre'];
	$link = conectar();
	$sql = "UPDATE categorias 
                    SET catNombre = '".$catNombre."' 
                    WHERE idCategoria = ".$idCategoria;

                    

	$resultado = mysqli_query($link, $sql)
	or die (mysqli_error($link));

	return $resultado;

}


 ?>
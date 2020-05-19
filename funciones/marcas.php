<?php 

## CRUD de marcas ##

function listarMarcas()
{

	$link = conectar();
	$sql = "SELECT idMarca, mkNombre FROM marcas";
	$resultado = mysqli_query($link, $sql);
	return $resultado;

}

function agregarMarca ()
{
	$link = conectar();
	$mkNombre = $_POST ['mkNombre'];
	$sql = "INSERT INTO marcas ( mkNombre ) VALUE ( '".$mkNombre."' )";
	$resultado = mysqli_query($link, $sql)
	or die( mysqli_error($link) );
	return $resultado;
}

function verMarcaPorID () //Para consultar la id de una marca asi me aparece en el form
{
	$idMarca = $_GET['idMarca'];

	$link = conectar();
	$sql = "SELECT idMarca, mkNombre FROM marcas WHERE idMarca = ".$idMarca;

	$resultado = mysqli_query($link, $sql);
	$marca = mysqli_fetch_assoc($resultado)
	or die (mysqli_error($link));
	return $marca;

}

function modificarMarca()
{
	$idMarca = $_POST['idMarca'];
	$mkNombre = $_POST ['mkNombre'];
	$link = conectar();
	$sql = "UPDATE marcas 
                    SET mkNombre = '".$mkNombre."' 
                    WHERE idMarca = ".$idMarca;

                    

	$resultado = mysqli_query($link, $sql)
	or die (mysqli_error($link));

	return $resultado;

}

 ?>
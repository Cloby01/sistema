<?php 

function listarUsuarios()
{

	$link = conectar();
	$sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado FROM usuarios";
	$resultado = mysqli_query($link, $sql);
	return $resultado;

}

function agregarUsuario ()
{
	$link = conectar();
	$usuNombre = $_POST ['usuNombre'];
	$usuApellido = $_POST ['usuApellido'];
	$usuEmail = $_POST ['usuEmail'];
	$usuPass = $_POST ['usuPass'];
	$usuEstado = $_POST ['usuEstado'];
	$sql = "INSERT INTO usuarios ( usuNombre, usuApellido, usuEmail, usuPass, usuEstado ) VALUE ( '".$usuNombre."', '".$usuApellido."', '".$usuEmail."', '".$usuPass."', 1 )";
	$resultado = mysqli_query($link, $sql)
	or die( mysqli_error($link) );
	return $resultado;
}


function verUsuarioPorID () 
{
	$idUsuario = $_GET['idUsuario'];
	$usuNombre = $_GET ['usuNombre'];
	$usuApellido = $_GET ['usuApellido'];
	$usuEmail = $_GET ['usuEmail'];
	$usuPass = $_GET ['usuPass'];
	$usuEstado = $_GET ['usuEstado'];

	$link = conectar();
	$sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado FROM usuarios WHERE idUsuario = ".$idUsuario;

	$resultado = mysqli_query($link, $sql);
	$usuario = mysqli_fetch_assoc($resultado)
	or die (mysqli_error($link));
	return $usuario;

}

function modificarUsuario()
{
	$idUsuario = $_POST['idUsuario'];
	$usuNombre = $_POST ['usuNombre'];
	$usuApellido = $_POST ['usuApellido'];
	$usuEmail = $_POST ['usuEmail'];
	$usuPass = $_POST ['usuPass'];
	$usuEstado = $_POST ['usuEstado'];

	$link = conectar();
	$sql = "UPDATE usuarios 
                    SET usuNombre = '".$usuNombre."', usuApellido = '".$usuApellido."', usuEmail = '".$usuEmail."', usuPass = '".$usuPass."', usuEstado = '".$usuEstado."' 
                    WHERE idUsuario = ".$idUsuario;

                    

	$resultado = mysqli_query($link, $sql)
	or die (mysqli_error($link));

	return $resultado;

}


 ?>
<?php 

$prdImagen = $_FILES ['prdImagen'];

echo '<pre>';
print_r($prdImagen);
echo '</pre>';

### ESTA SECCION ES PARA QUE AL SUBIR EL ARCHIVO, RENOMBRARLO Y SUBIRLO ######

$dir = 'productos/';
$temp = $_FILES['prdImagen']['tmp_name']; //Necesitamos solo obtener el nombre del archivo, entonces le decirmos que en lo que esta enviado solo necesitamos en nombre (Que es tmp_name)

## ESTO ES PARA AVERIGUAR LA EXTENCION ####
$ext = pathinfo($_FILES ['prdImagen']['name']);
$prdImagen = time().'.'.$ext['extension'];

## FIN PARA AVERIGUAR LA EXTENCION ####

move_uploaded_file($temp, $dir.$prdImagen); //entonces aca le estamos diciendo que solo necesitamos el nombre y que valla a la carpeta que se llama productos
//Move_uploaded_file hace una acción interna que hace un copy, lo cual hace que no acepte un directorio, se debe poner toda la ruta.
//el $prdImagen que esta alado de $dir es para cambiarle el nombre del archivo y hacer que aparesca el nombre del archivo sin la extencion.


 ?>
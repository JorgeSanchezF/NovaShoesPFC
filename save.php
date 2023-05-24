<?php
//importar clase database.php
require_once('Database.php');
session_start();

//recoger los elementos del formulario
if ($_POST) {
    $datos = [$_POST['id'], $_POST['nombre'], $_POST['precio']];
    Database::meterACesta($datos);
}

//invocar funcion save de database

//retornar a pagina productos
header('Location:productos.php');

?>
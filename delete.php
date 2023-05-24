<?php

//Recoger id de la url. Ver si existe y en tal caso recogerlo
$id = $_GET['id'];

//Importar clase database.php
require_once('Database.php');
//Invocar funcion delete de la clase database.php
Database::borrarDeCesta($id);
//Retornar al index.php para ver cambios
header('Location: cesta.php');

?>

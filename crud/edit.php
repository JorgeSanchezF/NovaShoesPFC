<?php 
// $_GET['nombre'] --> recoge el valor de la variable 'nombre' de la URL
// Ejemplo: http://localhost/php/delete.php?id=2

// 1. Recoger el id de la url. 
// 1.1 Ver si existe y en tal caso recogerlo.
$id = $_GET['id'];

// 2. Importar la clase Database.php
require_once('../Database.php');


// 3. Invocar la funcion findById de la clase Database.php
$db = new Database();
$resultado = $db->findById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h1>.</h1>
    <h1>.</h1>
    <h1>.</h1>
    <h1>.</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $resultado['id'] ?>">
        <input type="text" name="nombre" value="<?php echo $resultado['nombre'] ?>" placeholder="Actualiza la nombre">
        <input type="text" name="codigo" value="<?php echo $resultado['codigo'] ?>" placeholder="Actualiza el codigo">
        <input type="text" name="marca" value="<?php echo $resultado['marca'] ?>" placeholder="Actualiza el marca">
        <input type="text" name="perfil" value="<?php echo $resultado['perfil'] ?>" placeholder="Actualiza el perfil">
        <button type="submit">Enviar</button>
    </form>
    <h1>-</h1>
    <h1>-</h1>
    <h1>-</h1>
</body>
</html>
<?php

    // 1. Recoger las variables del formulario
    $name = $_POST['name'];
    $user = $_POST['correo'];
    $pass = $_POST['pass'];

    // 2. Importar la clase Database
    require_once('../../Database.php');

    // 3. Llamar a la funcion login de la clase Database
    $db = new Database();
    $resultado = $db->register($name, $user, $pass);

    header('Location: ../private/dashboard-user.php');
?>


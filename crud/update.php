<?php
    // 1. Recoger todos los elementos del formulario
    $datos = [$_POST['id'], $_POST['nombre'], $_POST['codigo'], $_POST['marca'], $_POST['perfil']];
    // 2. Importar la clase Database.php
    require_once('../Database.php');

    // 3. Invocar la funcion update de Database llevandole los datos

    $db = new Database();
    $resultado = $db->update($datos);

    // 4. Retornar al index.php
    header('Location: ../session/private/dashboard.php');
?>
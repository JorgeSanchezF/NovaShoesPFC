<?php
// 0. Inicio sesion o continuo con sesion iniciada
session_start();

// 1. Comprobar si la session esta iniciada
if(isset($_SESSION['user'])){
  // Existe
  if($_SESSION['user']['rol_id'] == 2){
  // 3. Si session iniciada y rol de usuario, te mando al usuario
  header('Location: ../private/dashboard-user.php');
  }else{
    // 4. Si session iniciada y rol admin, todo ok
    // Fabuloso
  }
}else{
  // 2. Si no esta iniciada, te mando al login
  header('Location: ../auth/login.php');
}


require_once('../../Database.php');
$database = new Database();
$resultado = $database->getClientes();
$cuenta = $database->contar();
$zapatillas = $database->getAll();
$proveedores = $database->getProveedores();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Página web</title>
  <link rel="stylesheet" type="text/css" href="../../admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<table>
		<?php
		echo "<th>Nombre</th>";
		echo "<th>Email</th>";		
		echo "<th>rol_id</th>";

		foreach ($resultado as $row) {
			echo "<tr>";
			echo "<td>" . $row["nombre"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["rol_id"] . "</td>";
	
		}

		?>
	</table>
	<table>
	<a href="../../crud/create.php">Crear zapatillas</a>
		<?php
		echo "<th>Nombre</th>";
		echo "<th>Código</th>";
		echo "<th>Marca</th>";
		echo "<th>Perfil</th>";
		echo "<th>Acciones</th>";


		foreach ($zapatillas as $row) {
			echo "<tr>";
			echo "<td>" . $row["nombre"] . "</td>";
			echo "<td>" . $row["codigo"] . "</td>";
			echo "<td>" . $row["marca"] . "</td>";
			echo "<td>" . $row["perfil"] . "</td>" ;
			echo '<td> <a href="../../crud/edit.php?id=' . $row["id"] . '">Editar</a> <a href="../../crud/delete.php?id=' . $row["id"] . '">Eliminar</a></td>';	
		}

		?>
	</table>

	<table>
		<?php

		echo "<th>id</th>";
		echo "<th>Nombre</th>";
		echo "<th>NIF</th>";
		echo "<th>Dirección</th>";
		echo "<th>Teléfono</th>";

		foreach ($proveedores as $row) {
			echo "<tr><td>" . $row['id'] . "</td>";
			echo "<td>" . $row["nombre"] . "</td>";
			echo "<td>" . $row["nif"] . "</td>";
			echo "<td>" . $row["direccion"] . "</td>";
			echo "<td>" . $row["telefono"] . "</td>";
		}
		?>
	</table>
	<button><a href="../auth/login.php">SALIR</a></button>

</body>
</html>

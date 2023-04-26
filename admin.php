<?php

require_once('Database.php');
$database = new Database();
$resultado = $database->getClientes();
$cuenta = $database->contar();
$zapatillas = $database->getAll();
$proveedores = $database->getProveedores();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administración</title>
	<link rel="stylesheet" href="admin.css">
</head>

<body class="fondo-admin">

	<table>
		<?php
		echo '<th>id</th>';
		echo '<th>Nombre</th>';
		echo '<th>Apellidos</th>';
		echo '<th>DNI</th>';
		echo '<th>Dirección</th>';
		echo '<th>Fecha de Nacimiento</th>';
		foreach ($resultado as $row) {
			echo '<tr>
			<td>' . $row['id'] . '
			</td>';

			echo '
			<td>' . $row['nombre'] . '
			</td>';



			echo '
			<td>' . $row['apellidos'] . '
			</td>';



			echo '
			<td>' . $row['dni'] . '
			</td>';



			echo '
			<td>' . $row['direccion'] . '
			</td>';



			echo '
			<td>' . $row['fec_nac'] . '
			</td>' . '
		</tr>';
		}
		echo '	<button>Añadir</button>
		<button>Modificar</button>
		<button>Salir</button>';
		?>
	</table>
	<table>
		<?php
		echo '<th>id</th>';
		echo '<th>Nombre</th>';
		echo '<th>Código</th>';
		echo '<th>Marca</th>';
		echo '<th>Perfil</th>';


		foreach ($zapatillas as $row) {
			echo '<tr>
			<td>' . $row['id'] . '
			</td>';

			echo '
			<td>' . $row['nombre'] . '
			</td>';



			echo '
			<td>' . $row['codigo'] . '
			</td>';



			echo '
			<td>' . $row['marca'] . '
			</td>';



			echo '
			<td>' . $row['perfil'] . '
			</td>' . '</tr>';
		}
		echo '	<button>Añadir</button>
		<button>Modificar</button>
		<button>Salir</button>';
		?>
	</table>

	<table>
		<?php

		echo '<th>id</th>';
		echo '<th>Nombre</th>';
		echo '<th>NIF</th>';
		echo '<th>Dirección</th>';
		echo '<th>Teléfono</th>';


		foreach ($proveedores as $row) {
			echo '<tr>
			<td>' . $row['id'] . '
			</td>';

			echo '
			<td>' . $row['nombre'] . '
			</td>';



			echo '
			<td>' . $row['nif'] . '
			</td>';



			echo '
			<td>' . $row['direccion'] . '
			</td>';



			echo '
			<td>' . $row['telefono'] . '
			</td>' . '</tr>';
		}
		echo '	<button>Añadir</button>
		<button>Modificar</button>
		<button>Salir</button>';
		?>
	</table>



</body>

</html>
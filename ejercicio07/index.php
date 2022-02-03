<!-- Incluir el archivo de datos array.php -->
<?php include 'array.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSV con PHP</title>
	<!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">Trabajando con arrays en PHP y exportación a CSV</p>
    		<a class="button is-link" href="exportar.php">Exportar a CSV</a>
  		</div>
	</section>


	<section class="section">
		<table class="table is-stripped is-fullwidth is-bordered">
			<thead>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo electrónico</th>
				<th>Teléfono</th>
			</thead>

			<?php
				foreach ($personas as $persona) {
			?>
			<tr>
				<?php
					foreach ($persona as $dato) {
				?>
					<td><?php echo $dato; ?></td>
				<?php
					}
				?>
			</tr>
			<?php
				}
			?>

			<tfoot>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo electrónico</th>
				<th>Teléfono</th>
			</tfoot>
		</table>
	</section>

</body>
</html>



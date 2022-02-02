<?php include 'array.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leer Archivo txt con PHP</title>
	<!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">Contenido del archivo de texto plano</p>
  		</div>
	</section>

	<section class="section">

		

		<table class="table is-stripped is-fullwidth is-bordered">

			<thead>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Teléfono</th>
			</thead>
			<?php
				foreach ( $personas as $persona ) {
			?>
			<tr>
				<?php
					foreach ($persona as $dato ) {
				?>
					<td><?php echo $dato; ?></td>
				<?php
					}
				?>
			</tr>
			<?php
			}
			?>
		</table>
	</section>

	<section>
		<a class="button is-link" href="guardarencsv.php">Exportar a CSV</a>
	</section>

</body>
</html>



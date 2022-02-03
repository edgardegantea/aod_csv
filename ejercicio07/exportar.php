<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">

<?php

	include 'array.php';

	$micsv = fopen("personas.csv", "w");

	foreach ($personas as $persona) {
		fputcsv($micsv, $persona);
	}

	fclose($micsv);

?>

<div class="columns">
	<div class="column has-text-centered mt-6">
		<button class="button is-link" onclick="javascript:window.history.back();" autofocus>Regresar</button>
	</div>
</div>

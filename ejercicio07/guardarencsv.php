<link rel="stylesheet" href="assets/css/bulma.min.css">

<?php
    include 'array.php';
    
    $mycsv = fopen("data.csv", "w");
    
    foreach ($personas as $persona) {
       fputcsv($mycsv, $persona);
    }

    fclose($mycsv);

?>

<button class="button is-link" onclick="javascript:window.history.back();" autofocus>Regresar</button>
<?php

    $meses = array(
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    );

    // asociativo
    $persona = array(
        'telefono' => 654564654, 
        'edad' => 32,
        'pais' => 'Mexico'
    );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>

    <!-- <h1>Meses</h1> -->
    <ul>
        <?php 
            // foreach ($meses as $mes) {
            //     echo '<li>' . $mes . '</li>';
            // }

            foreach ($persona as $dato => $valor) {
                echo '<li>' . $dato . ' : ' . $valor . '</li>';
            }

        ?>
    </ul>

</body>

</html>

<?php 

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
        'Diciembre'
    );

    // echo count($meses);

    $ultimo_mes = count($meses) - 1; // ultima posicion
    //echo $meses[$ultimo_mes];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>

    <h1>Meses del año</h1>

    <ul>
        <?php  
            foreach($meses as $mes) {
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>
    
</body>
</html>
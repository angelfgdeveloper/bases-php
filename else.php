<?php 

    $edad = 17;

    if ($edad >= 18) {
        echo '<h1> Bievenido Luis </h1>';
    } else {
        echo '<h1> No eres mayor de edad </h1>';
    }

    $mes = 'Diciembre';

    if ($mes == 'Diciembre') {
        echo 'Feliz Navidad';
    } else if ($mes == 'Enero') {
        echo 'Feliz Año Nuevo';
    } else if ($mes == 'Julio') {
        echo 'Feliz Julio';
    } else {
        echo "El mes que pusiste no tiene celebración";
    }

?>
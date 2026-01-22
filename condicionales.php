
<?php 

    $edad = 18;
    $nombre = 'Luis';

    // xor que se cumpla una y solo una condicion (si hay mas no es valido)
    // and ó && ó or
    if ($edad >= 18 and $nombre == 'Luis') {
        echo '<h1> Bievenido Luis </h1>';
    }

    if ($edad < 18) {
        echo '<h1> Eres menor de edad </h1>';
    }

?>
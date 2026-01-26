<?php 

    // isset($edad) -> Esta seteado un valor tru o false
    $edad = 18;
    // echo isset($edad);

    // Ternario
    $edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
    echo 'Edad: ' . $edad;

?>
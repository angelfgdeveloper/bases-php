
<?php 

    $luis = array(
        'telefono' => '987878789', 
        'edad' => 32, 
        'apellido' => 'Angel', 
        'pais' => 'Mexico'
    );

    $luis['edad'] = 33;

    echo 'El telefono es ' . $luis['telefono'] . '<br />';
    echo $luis['edad'] . '<br />';
    echo $luis['apellido'] . '<br />';
    echo $luis['pais'] . '<br />';

?>
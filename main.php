<?php
require_once 'seguro.php';
require_once 'tipoSeguro.php';

$seguros = [
    new Seguro('Pepito', TipoSeguro::ESTUDIANTES, 5000.00, 300.00, ['Enfermedad', 'Perdida']),
    new Seguro('Pepito2', TipoSeguro::ANUAL, 8000.00, 500.00, ['Robo', 'Perdida']),
    new Seguro('Pepito3', TipoSeguro::ESTUDIANTES, 1000.00, 100.00, ['Enfermedad', 'Accidente']),
    new Seguro('Pepito4', TipoSeguro::DIAS, 400.00, 200.00, ['Robo', 'Accidente'])
];

echo '<br>- Seguro más caro:<br>';
$seguroMasCaro = buscarSeguroMasCaro($seguros);
echo $seguroMasCaro->mostrarInfo() . '<br>';

echo '<br>- Seguro de estudiantes:<br>';
$seguroEstudiantes = buscarTipoSeguro($seguros, TipoSeguro::ESTUDIANTES);
foreach($seguroEstudiantes as $seguro){
    echo $seguro->mostrarInfo() . '<br>';
}




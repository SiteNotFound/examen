<?php
require_once 'seguro.php';
require_once 'tipoSeguro.php';
require_once 'agencia.php';

$seguros = [
    new Seguro('Pepito', TipoSeguro::ESTUDIANTES, 5000.00, 300.00, ['Enfermedad', 'Perdida']),
    new Seguro('Arya', TipoSeguro::ANUAL, 8000.00, 500.00, ['Robo', 'Perdida']),
    new Seguro('Xavi', TipoSeguro::ESTUDIANTES, 1000.00, 100.00, ['Enfermedad', 'Accidente']),
    new Seguro('Isis', TipoSeguro::DIAS, 400.00, 200.00, ['Robo', 'Accidente'])
];

$agencia = new Agencia($seguros);

echo '<br>- Seguro más caro:<br>';
echo $agencia->buscarSeguroMasCaro();

echo '<br>- Seguro de estudiantes:<br>';
$seguroEstudiantes = $agencia->buscarTipoSeguro(TipoSeguro::ESTUDIANTES);
foreach($seguroEstudiantes as $seguro){
    echo $seguro . '<br>';
}





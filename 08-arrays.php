<?php
// arrays
$carros = array(1=>"BMW", 2=>"VELOSTER", 3=>"FIAT");
$carros[] = "Amarok";
$carros[10] = "camaro";
echo $carros[10];

echo "<br>";


$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";


$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<br>";

// Count
echo count($carros);
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
$totalClientes =  count($motos);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach($carros as $valor) {
    echo $valor;
    echo "<br>";
}

// Arrays Associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Ocara";
print_r($pessoa);

foreach ($pessoa as $indice => $valor) {
    echo $indice. ":". $valor;
    echo "<br>";
}

// Arrays Multidimensionais
$times = array(
    "cariocas"=> array("campeão"=>"vasco", "vice" =>"flamengo", "terceiro"=>"botafogo"),
    "paulistas"=> array("santos", "sao paulo", "palmeiras"),
    "bahianos"=> array("bahia", "vitoria", "sport"),   
);
echo $times["paulistas"][1];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor){
    echo $indice. ":". $valor. "<br>";
}
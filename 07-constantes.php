<?php
// constantes automaticamente globais
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'santos']);
echo 'Meu nome é '.NOME.' minha idade é '.IDADE.' e minha altura é '.ALTURA;
echo "<hr>";
echo TIMES[0];
echo "<hr>";

function exibeNome(){
    echo NOME;
}

exibeNome();
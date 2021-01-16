<?php
/*********** Escalares ************/
// string
$nome = "123";
var_dump($nome);
if (is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

// int
$idade = 10;
var_dump($idade);
if (is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 10.5;
var_dump($idade);
if (is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)):
	echo "É um boolean";
else:
	echo "Não é um boolean";
endif;
echo "<hr>";

/********** Compostos ***********/
// array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if (is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

// object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);
if (is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

/********* NULO **********/
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource




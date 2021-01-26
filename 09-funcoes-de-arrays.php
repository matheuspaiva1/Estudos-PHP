<?php
/*
 * is_array($array) = verificar se uma determinada variavel é um array
 * in_array($valor, $array)= verifica se um determinado valor existe em alguma posiçã do array
 * array_keys($valor)= retorna um novo array com chaves do array passado como parametro
 * array_values($array) = retorna um novo array com valores do array passado como parametro 
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
 * array_pop($array) = exclui a primeira posição do array
 * array_shift($array) = exclui a primeira posição do array
 * array_unshift($arr, "valor") = adiciona um ou mais elementos no inicio do array
 * array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
 * array_combine($keys, $values) = mescla os dois arrays passados
 * array_sum() = calcula a soma dos elementos de um array
 * explode("/", "20/01/2001") = transforma string em array
 * implode("-", $arr) = transforma array em string
*/

$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);
echo $string;

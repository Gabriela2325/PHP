<?php 

//7.faça um programa que tenha um vetor de 5 numero inteiros,mostre ua soma,a multiplicação e o numeros    

$numeros = array(2, 4, 6, 8, 10);

$soma = array_sum($numeros);

$multiplicacao = array_product($numeros);

echo "Números: " . implode(", ", $numeros) . "<br>";
echo "Soma: $soma<br>";
echo "Multiplicação: $multiplicacao<br>";
?>
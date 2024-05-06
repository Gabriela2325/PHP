<?php 

//  9.faça um programa que tena um vetor com 10 numeros inteiros,calcule e mostre a soma dos quadradis dos elementos do vetor.

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$soma_quadrados = 0;

foreach ($numeros as $numero) {
    $soma_quadrados += $numero * $numero;
}

echo "A soma dos quadrados dos elementos do vetor é: $soma_quadrados<br>";
?>
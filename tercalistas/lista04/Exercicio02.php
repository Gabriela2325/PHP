<?php 

//2.    faça um programa que tenha um vetor de 10 numeros e mostre eles na ordem inversa

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "Vetor de números na ordem inversa:<br>";
for ($i = count($numeros) - 1; $i >= 0; $i--) {
    echo $numeros[$i] . "<br>";
}
?>
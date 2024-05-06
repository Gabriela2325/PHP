<?php 

//  4. faça um programa que tenha um vetor de 10 caracteres, e diga quantas consoantes forram lidas 
// imprima as consoantes

$caracteres = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');

function ehConsoante($caractere) {
    $consoantes = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');

    return in_array(strtolower($caractere), $consoantes);
}

$consoantes_count = 0;

$consoantes_array = array();

foreach ($caracteres as $caractere) {
    if (ehConsoante($caractere)) {
        $consoantes_count++;
        $consoantes_array[] = $caractere;
    }
}

echo "Número de consoantes lidas: $consoantes_count<br>";

echo "Consoantes lidas: " . implode(", ", $consoantes_array) . "<br>";
?>
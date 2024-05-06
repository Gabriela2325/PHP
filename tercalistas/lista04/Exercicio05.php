<?php 


//5.faça um programa que tena 20 numeros inteiros e um vetor . armazene os nomeros pares no vetorpar 
//e o numeros impares no vetor impar, no final imprima os tres vetores 

function ehPar($numero) {
    return $numero % 2 == 0;
}

$vetor = array();
$vetor_par = array();
$vetor_impar = array();

for ($i = 0; $i < 20; $i++) {
    $numero = rand(1, 100); 
    $vetor[] = $numero;

    if (ehPar($numero)) {
        $vetor_par[] = $numero;
    } else {
        $vetor_impar[] = $numero;
    }
}

echo "Vetor original: " . implode(", ", $vetor) . "<br>";

echo "Vetor de números pares: " . implode(", ", $vetor_par) . "<br>";

echo "Vetor de números ímpares: " . implode(", ", $vetor_impar) . "<br>";

?>
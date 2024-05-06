<?php 

//   10. faça um programa que contena dois vetores com 10 elementos cada.Gere um terceiro vetor de 20 elementos, 
//cujos valores deverão ser compostos pelos elementos intercalados dos dois outros vetores

$vetor1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$vetor2 = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

$vetor_resultante = array();

for ($i = 0; $i < 10; $i++) {
    $vetor_resultante[] = $vetor1[$i];
    $vetor_resultante[] = $vetor2[$i];
}

echo "Terceiro vetor com valores intercalados:<br>";
echo implode(", ", $vetor_resultante) . "<br>";

?>
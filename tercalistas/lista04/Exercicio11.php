<?php 


//   11. altere o programa interior , intercalando 3 vetores de 10 elementos cada 

$vetor1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$vetor2 = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
$vetor3 = array(21, 22, 23, 24, 25, 26, 27, 28, 29, 30);

$vetor_resultante = array();

for ($i = 0; $i < 10; $i++) {
    $vetor_resultante[] = $vetor1[$i];
    $vetor_resultante[] = $vetor2[$i];
    $vetor_resultante[] = $vetor3[$i];
}

echo "Vetor resultante com valores intercalados:<br>";
echo implode(", ", $vetor_resultante) . "<br>";

?>
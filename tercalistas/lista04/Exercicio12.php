<?php 


//   12. Foram anotadas as idades e altura de 30 alunos.Faca um programa que determine quantos alunos
// com mais de 13 anos possuem altura inferior a media de altura desses alunos

$alturas = array(1.5, 1.6, 1.7, 1.4, 1.65, 1.55, 1.75, 1.8, 1.68, 1.72, 1.62, 1.58, 1.66, 1.76, 1.85, 1.73, 1.61, 1.69, 1.78, 1.79, 1.71, 1.63, 1.59, 1.67, 1.74, 1.77, 1.81, 1.83, 1.64, 1.70);
$idades = array(14, 15, 13, 12, 16, 14, 13, 15, 12, 14, 13, 16, 15, 12, 13, 14, 15, 16, 14, 13, 12, 15, 16, 14, 13, 12, 15, 16, 14, 13);

$media_altura = array_sum($alturas) / count($alturas);

$alunos_inferiores_media = 0;
for ($i = 0; $i < count($alturas); $i++) {
    if ($idades[$i] > 13 && $alturas[$i] < $media_altura) {
        $alunos_inferiores_media++;
    }
}

echo "Número de alunos com mais de 13 anos e altura inferior à média: $alunos_inferiores_media<br>";
?>
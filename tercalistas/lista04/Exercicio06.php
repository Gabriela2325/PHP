<?php 

// 6.faça um programa queguarde 4 notas de 10 alunos em listas diferente,
//calcule e armazene em outra lista media de cada aluno,
// no final imprima o numero de alunos commedia ou igual a 7   

function calcularMedia($notas) {
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    return $media;
}

$notas_aluno1 = array(8, 7, 6, 9);
$notas_aluno2 = array(6, 5, 7, 8);
$notas_aluno3 = array(9, 9, 8, 7);
$notas_aluno4 = array(7, 6, 7, 8);
$notas_aluno5 = array(8, 8, 9, 9);
$notas_aluno6 = array(6, 6, 7, 7);
$notas_aluno7 = array(7, 7, 7, 8);
$notas_aluno8 = array(8, 9, 7, 9);
$notas_aluno9 = array(6, 6, 6, 7);
$notas_aluno10 = array(7, 8, 8, 9);


$medias_alunos = array();


foreach (range(1, 10) as $i) {
    $notas = ${"notas_aluno$i"};
    $media = calcularMedia($notas);
    $medias_alunos[] = $media;
}

$alunos_aprovados = 0;
foreach ($medias_alunos as $media) {
    if ($media >= 7) {
        $alunos_aprovados++;
    }
}

echo "Número de alunos com média igual ou superior a 7: $alunos_aprovados<br>";

?>
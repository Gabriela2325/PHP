<?php
//24.Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno,
// considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5.

    $nota1 = 6 ;
    $nota2 = 8 ;
    $nota3 = 7 ;

    $mediaponderada = (2 * $nota1) + (3 * $nota2 ) + (5 * $nota3) / 10 ;

    echo "A média ponderada dos alunos é " . $mediaponderada;

?>
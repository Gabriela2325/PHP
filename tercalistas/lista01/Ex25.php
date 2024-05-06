<?php
// Escreva um algoritmo que receba o valor de um produto, acrescente
// 16% a esse valor, divida em 10 parcelas e mostre para o usuário o
// valor da parcela e o valor total da compra.

$valorprod = 15; 

$x = $valorprod * (16 / 100);

$total = $valorprod + $x;

echo "O valor inicial do produto é: " . $valorprod . "<br>";

$valor_parcela = $total / 10;

echo "O valor da parcela é: " . $valor_parcela . "<br>";

echo "O valor total da compra é: " . $total;
?>
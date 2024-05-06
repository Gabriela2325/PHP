<?php 

//6. Faça um programa que receba dois valores para completar a função.
//Comnome somaImposto() e dois parâmetros, essa função delimitaespecificamente a
//tipagem destes parâmetros (para que valores errados nãosejam enviados). 
//Sendo custoProduto um (float) ele é o valor de um produtoespecífico, e taxaImposto 
//um (int), que é a quantia de imposto sobre vendasexpressa em porcentagem, esta função deverá fazer 
//o cálculo do novo valordo produto com o imposto e retornar este resultado para ser processado foradela.

function somaImposto(float $custoProduto, int $taxaImposto): float {
    $novoValor = $custoProduto * (1 + ($taxaImposto / 100));
    return $novoValor;
}

$custoProduto = 100.00; 
$taxaImposto = 10; 

$novoValorProduto = somaImposto($custoProduto, $taxaImposto);

echo "O novo valor do produto com o imposto é: R$ " . number_format($novoValorProduto, 2);


?>
<?php 

//11. As Organizações Tabajara resolveram dar um aumento de salário aos seuscolaboradores 
//e lhe contaram para desenvolver o programa que calculará osreajustes. 
//Faça um programa que recebe o salário de um colaborador e o reajustesegundo o seguinte critério
// baseado no salário atual:
//a. salários até R$ 280,00 (incluindo) : aumento de 20%
//b. salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
//c. salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
//d. salários de R$ 1500,00 em diante : aumento de 5%
//e. Após o aumento ser realizado, informe na tela:
//f. o salário antes do reajuste;
//g. o percentual de aumento aplicado;
//h. o valor do aumento;
//i. o novo salário, após o aumento

function calcularReajuste($salario) {
    $percentual = 0;
    $aumento = 0;

    if ($salario <= 280) {
        $percentual = 20;
    } elseif ($salario <= 700) {
        $percentual = 15;
    } elseif ($salario <= 1500) {
        $percentual = 10;
    } else {
        $percentual = 5;
    }

    $aumento = ($salario * $percentual) / 100;
    $novo_salario = $salario + $aumento;

    return array(
        'salario_antes' => $salario,
        'percentual_aumento' => $percentual,
        'valor_aumento' => $aumento,
        'novo_salario' => $novo_salario
    );
}

$salario_colaborador = 1200;

$detalhes_reajuste = calcularReajuste($salario_colaborador);

echo "Salário antes do reajuste: R$ {$detalhes_reajuste['salario_antes']}<br>";
echo "Percentual de aumento aplicado: {$detalhes_reajuste['percentual_aumento']}%<br>";
echo "Valor do aumento: R$ {$detalhes_reajuste['valor_aumento']}<br>";
echo "Novo salário: R$ {$detalhes_reajuste['novo_salario']}<br>";


?>
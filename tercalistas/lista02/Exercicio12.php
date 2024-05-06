<?php

//12. Faça um programa para o cálculo de uma folha de pagamento,
//sabendo que osdescontos são do Imposto de Renda, que depende do salário bruto
//(conforme tabelaabaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto
//mas não é descontado (é a empresa que deposita)
//O Salário Líquido correspondeao Salário Bruto menos os descontos.
//O programa deverá pedir ao usuário o valorda sua hora e a quantidade de horas trabalhadas no mês.
//a. Desconto do IR:
//b. Salário Bruto até 900 (inclusive) - isento
//c. Salário Bruto até 1500 (inclusive) - desconto de 5%
//d. Salário Bruto até 2500 (inclusive) - desconto de 10%
//e. Salário Bruto acima de 2500 - desconto de 20% Imprima na tela asinformações,
//dispostas conforme o exemplo abaixo. No exemplo o valor dahora é 5 e a quantidade de hora é 220 

function calcularDescontoIR($salario_bruto) {
    if ($salario_bruto <= 900) {
        return 0;
    } elseif ($salario_bruto <= 1500) {
        return $salario_bruto * 0.05;
    } elseif ($salario_bruto <= 2500) {
        return $salario_bruto * 0.1;
    } else {
        return $salario_bruto * 0.2;
    }
}

$valor_hora = 5;
$horas_trabalhadas = 220;

$salario_bruto = $valor_hora * $horas_trabalhadas;

$desconto_ir = calcularDescontoIR($salario_bruto);
$desconto_sindicato = $salario_bruto * 0.03;
$fgts = $salario_bruto * 0.11;

$salario_liquido = $salario_bruto - $desconto_ir - $desconto_sindicato;

echo "Salário Bruto: R$ $salario_bruto<br>";
echo "(-) IR: R$ $desconto_ir<br>";
echo "(-) Sindicato: R$ $desconto_sindicato<br>";
echo "FGTS: R$ $fgts<br>";
echo "Salário Líquido: R$ $salario_liquido<br>";

?>
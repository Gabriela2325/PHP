<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio23</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o valor do saque (entre 10 e 600 reais): </label>
        <input name="saque" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //23. Faça um programa para um caixa eletrônico.
    // O programa deverá perguntar aousuário o valor do saque e depois informar
    // quantas notas de cada valor serãofornecidas. 
    //As notas disponíveis serão as de 1, 5, 10, 50 e 100 reais. 
    //O valor mínimoé de 10 reais e o máximo de 600 reais. 
    //O programa não deve se preocupar com aquantidade de notas existentes na máquina.
    //a. Exemplo 1: Para sacar a quantia de 256 reais, o programa fornece duasnotas de 100,
    // uma nota de 50, uma nota de 5 e uma nota de 1;
    //b. Exemplo 2: Para sacar a quantia de 399 reais, o programa fornece três notasde 100,
    // uma nota de 50, quatro notas de 10, uma nota de 5 e quatro notas de1.

    $saque = ($_GET['saque']);

    function calcularNotas($saque)
    {

        $notas = [100, 50, 10, 5, 1];

        if ($saque < 10 || $saque > 600) {
            echo "O valor do saque deve estar entre 10 e 600 reais.";
            return;
        }

        $quantidade_notas = [];

        foreach ($notas as $nota) {
            $quantidade = intval($saque / $nota);

            $quantidade_notas[$nota] = $quantidade;

            $saque -= $quantidade * $nota;
        }

        foreach ($quantidade_notas as $nota => $quantidade) {
            if ($quantidade > 0) {
                echo "Notas de $nota reais: $quantidade<br>";
            }
        }
    }

    calcularNotas($saque);
    ?>

</body>

</html>
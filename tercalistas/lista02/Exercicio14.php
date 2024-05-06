<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio14</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite a primeira nota: </label>
        <input name="nota1" type="number">

        <label>Digite a segunda nota: </label>
        <input name="nota2" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //14. Faça um programa que lê as duas notas parciais obtidas por um aluno numa
    //disciplina ao longo de um semestre, e calcule a sua média.
    // A atribuição de conceitosobedece à tabela abaixo:a.
    // O algoritmo deve mostrar na tela as notas, a média,
    // o conceitocorrespondente e a mensagem “APROVADO” se o conceito
    // for A, B ou C ou“REPROVADO” se o conceito for D ou E


    $nota1 = ($_GET['nota1']);
    $nota2 = ($_GET['nota2']);

    function calcularMedia($nota1, $nota2)
    {
        $media = ($nota1 + $nota2) / 2;

        if ($media >= 9) {
            return array('media' => $media, 'conceito' => 'A');
        } elseif ($media >= 7.5) {
            return array('media' => $media, 'conceito' => 'B');
        } elseif ($media >= 6) {
            return array('media' => $media, 'conceito' => 'C');
        } elseif ($media >= 4) {
            return array('media' => $media, 'conceito' => 'D');
        } else {
            return array('media' => $media, 'conceito' => 'E');
        }
    }

    $resultado = calcularMedia($nota1, $nota2);

    echo "Notas: $nota1, $nota2\n";
    echo "Média: {$resultado['media']}\n";
    echo "Conceito: {$resultado['conceito']}\n";

    if ($resultado['conceito'] == 'A' || $resultado['conceito'] == 'B' || $resultado['conceito'] == 'C') {
        echo "APROVADO\n";
    } else {
        echo "REPROVADO\n";
    }
    ?>

</body>

</html>
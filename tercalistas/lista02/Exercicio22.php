<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio22</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite nota 1: </label>
        <input name="nota1" type="number">

        <label>Digite nota 2: </label>
        <input name="nota2" type="number">

        <label>Digite nota 3: </label>
        <input name="nota3" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //22. Faça um programa para leitura de três notas parciais de um aluno. 
    //O programa devecalcular a média alcançada por aluno e presentar:
    //a. A mensagem "Aprovado", se a média for maior ou igual a 7, com a respectivamédia alcançada;
    //b. A mensagem "Reprovado", se a média for menor do que 7, com a respectivamédia alcançada;
    //c. A mensagem "Aprovado com Distinção", se a média for igual a 10.

    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    function calcularMedia($nota1, $nota2, $nota3)
    {
        return ($nota1 + $nota2 + $nota3) / 3;
    }

    function determinarSituacao($media)
    {
        if ($media == 10) {
            echo "Aprovado com Distinção. Média: $media";
        } elseif ($media >= 7) {
            echo "Aprovado. Média: $media";
        } else {
            echo "Reprovado. Média: $media";
        }
    }
    $media = calcularMedia($nota1, $nota2, $nota3);

    determinarSituacao($media);
    ?>

</body>

</html>
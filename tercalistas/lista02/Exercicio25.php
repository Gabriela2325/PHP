<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio25</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um número inteiro: </label>
        <input name="numero" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //25. Faça um Programa que peça um número e informe se o número é inteiro oudecimal.
    // Dica: utilize uma função de arredondamento.

    $numero = ($_GET['numero']);

    function verificarInteiroOuDecimal($numero)
    {
        if ($numero == round($numero)) {
            echo "$numero é um número inteiro.";
        } else {
            echo "$numero é um número decimal.";
        }
    }


    verificarInteiroOuDecimal($numero);
    ?>

</body>

</html>
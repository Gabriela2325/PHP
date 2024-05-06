<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio24</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um número inteiro: </label>
        <input name="numero" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //24. Faça um Programa que peça um número inteiro e determine se ele é par ou ímpar.
    //Dica: utilize o operador módulo (resto da divisão).

    $numero = ($_GET['numero']);

    function parOuImpar($numero)
    {
        if ($numero % 2 == 0) {
            echo "$numero é par.";
        } else {
            echo "$numero é ímpar.";
        }
    }

    parOuImpar($numero);

    ?>

</body>

</html>
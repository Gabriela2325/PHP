<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio07</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um número inteiro menor que 1000: </label>
        <input name="num" type="number" required>

        <button type="submit">Enviar</button>
    </form>

    <?php

    //20. Faça um Programa que leia um número inteiro menor que 1000
    // e imprima aquantidade de centenas, dezenas e unidades do mesmo.

    $num = ($_GET['num']);

    function imprimirCentenasDezenasUnidades($numero)
    {

        if ($numero < 0 || $numero >= 1000) {
            echo "Número fora do intervalo válido.";
            return;
        }

        $centenas = floor($numero / 100);
        $dezenas = floor(($numero % 100) / 10);
        $unidades = $numero % 10;

        echo "Centenas: $centenas<br>";
        echo "Dezenas: $dezenas<br>";
        echo "Unidades: $unidades<br>";
    }

    imprimirCentenasDezenasUnidades($numero);
    ?>

</body>

</html>
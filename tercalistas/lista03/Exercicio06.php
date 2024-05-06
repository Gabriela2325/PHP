<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio06</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o número de termos da série de Fibonacci:</label>
        <input name="num" type="number">
        <button type="submit">Enviar</button>
    </form>

    <?php

    $n = (int)$_GET['num'];

    function fibonacci($n)
    {
        $fibo = array();

        $fibo[] = 1;
        $fibo[] = 1;

        for ($i = 2; $i < $n; $i++) {
            $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
        }

        return $fibo;
    }

    $fibo = fibonacci($n);

    echo "Série de Fibonacci até o $n-ésimo termo:<br>";
    echo implode(", ", $fibo) . "<br>";

    ?>

</body>

</html>
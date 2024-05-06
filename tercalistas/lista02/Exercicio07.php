<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio07</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o primeiro numero: </label>
        <input name="num1" type="number" required>

        <label>Digite o segundo numero: </label>
        <input name="num2" type="number" required>

        <label>Digite o terceiro numero: </label>
        <input name="num3" type="number" required>

        <button type="submit">Enviar</button>
    </form>

    <?php

    // 7. Faça um Programa que leia três números e mostre o maior e o menor deles

    $num1 = ($_GET['num1']);
    $num2 = ($_GET['num2']);
    $num3 = ($_GET['num3']);

    if ($num1 < $num2 && $num1 < $num3) {

        echo "O primeiro número é o menor: $num1<br>";
    } elseif ($num2 < $num3) {

        echo "O segundo número é o menor: $num2<br>";
    } else {

        echo "O terceiro número é o menor: $num3<br>";
    }
    ?>
</body>

</html>
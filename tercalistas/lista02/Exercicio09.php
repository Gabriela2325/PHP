<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio08</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o primeiro numero: </label>
        <input name="num1" type="number">

        <label>Digite o segundo numero: </label>
        <input name="num2" type="number">

        <label>Digite o terceiro numero: </label>
        <input name="num3" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //9. Faça um Programa que leia três números e mostre-os em ordem decrescente

    $num1 = ($_GET['num1']);
    $num2 = ($_GET['num2']);
    $num3 = ($_GET['num3']);

    $numbers = array($num1, $num2, $num3); //array para armazenar numeros

    rsort($numbers); // ordenar decrescente

    echo "Números em ordem decrescente: ";
    foreach ($numbers as $number) {
        echo "$number ";
    }

    ?>

</body>

</html>
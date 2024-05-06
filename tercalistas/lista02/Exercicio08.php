<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio08</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o preço do primeiro produto: </label>
        <input name="produto1" type="number">

        <label>Digite o preço do segundo produto: </label>
        <input name="produto2" type="number">

        <label>Digite o preço do terceiro produto: </label>
        <input name="produto3" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    $produto1 = $_GET['produto1'];
    $produto2 = $_GET['produto2'];
    $produto3 = $_GET['produto3'];

    if ($produto1 <= $produto2 && $produto1 <= $produto3) {
        echo "O Produto escolhido é o 1";
    } elseif ($produto2 <= $produto1 && $produto2 <= $produto3) {
        echo "O Produto escolhido é o 2";
    } else {
        echo "O Produto escolhido é o 3";
    }

    ?>

</body>

</html>
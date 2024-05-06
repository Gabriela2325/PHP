<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio17</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um ano: </label>
        <input name="ano" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //17. Faça um Programa que peça um número correspondente 
    //a um determinado ano eem seguida informe se este ano é ou não bissexto

    $ano = $_GET['ano'];

    function ehBissexto($ano)
    {
        if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }


    if (ehBissexto($ano)) {
        echo "$ano é um ano bissexto.";
    } else {
        echo "$ano não é um ano bissexto.";
    }

    ehBissexto($ano);

    ?>

</body>

</html>
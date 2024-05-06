<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio07</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um número inteiro :</label>
        <input name="num" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //7.	Faça um programa que calcule 0 fatorial de um número inteiro fornecido pelo usuário. Ex.: 5!=5.4.3

    $num = (int)$_GET['num'];

    function calcularFatorial($num)
    {
        $fatorial = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fatorial *= $i;
        }

        return $fatorial;
    }

    $fatorial = calcularFatorial($num);

    echo "O fatorial de $num é $fatorial.<br>";

    ?>

</body>

</html>
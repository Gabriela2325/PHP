<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio16</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o valor de a: </label>
        <input name="a" type="number">

        <label>Digite o valor de b: </label>
        <input name="b" type="number">

        <label>Digite o valor de c: </label>
        <input name="c" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //16. Faça um programa que calcule as raízes de uma equação do segundo grau, 
    //na forma ax2 + bx + c. 
    //O programa deverá pedir os valores de a, b e c e fazer asconsistências, 
    //informando ao usuário nas seguintes situações:
    //a.Se o usuário informar o valor de A igual a zero, a equação não é do segundograu e o 
    //programa não deve fazer pedir os demais valores, sendo encerrado;
    //b. Se o delta calculado for negativo, a equação não possui raízes reais.
    // Informeao usuário e encerre o programa;
    //c. Se o delta calculado for igual a zero a equação possui apenas uma raiz real;
    //informe-a ao usuário;
    //d. Se o delta for positivo, a equação possui duas raiz reais; informe-as aousuário

    function calcularRaizes($a, $b, $c)
    {

        if ($a == 0) {
            echo "A equação não é do segundo grau.";
            return;
        }

        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0) {
            echo "A equação não possui raízes reais.";
        } elseif ($delta == 0) {
            $raiz = - ($b / (2 * $a));
            echo "A equação possui uma raiz real: $raiz";
        } else {
            $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
            $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "A equação possui duas raízes reais: $raiz1 e $raiz2";
        }
    }
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    calcularRaizes($a, $b, $c);

    ?>

</body>

</html>
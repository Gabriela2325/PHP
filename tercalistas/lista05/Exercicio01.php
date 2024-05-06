<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>

<body>

    <div>
        <h2>Soma de Três Números</h2>
        <form action="" method="GET">
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" id="num1" name="num1" required><br>

            <label for="num2">Digite o segundo número:</label>
            <input type="number" id="num2" name="num2" required><br>

            <label for="num3">Digite o terceiro número:</label>
            <input type="number" id="num3" name="num3" required><br>

            <button type="submit">Calcular Soma</button>
        </form>

        <?php

        //1. Faça um programa, com uma função que necessite de três argumentos, eque forneça a soma desses três argumentos

            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];

            function calcularSoma($num1, $num2, $num3) {
                return $num1 + $num2 + $num3;
            }

            $soma = calcularSoma($num1, $num2, $num3);

            echo "<br>A soma de $num1, $num2 e $num3 é: $soma";
        
        ?>

    </div>

</body>

</html>
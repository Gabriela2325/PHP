<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio04</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o primeiro número inteiro: </label>
        <input name="num1" type="number">

        <label>Digite o segundo número inteiro:</label>
        <input name="num2" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //4.	Altere o programa anterior para mostrar no final a soma dos números.

    
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];

    function gerarIntSomar($inicio, $fim)
    {
        $soma = 0;

        if ($inicio < $fim) {
            for ($i = $inicio; $i <= $fim; $i++) {
                echo "$i ";
                $soma += $i;
            }
        } else {
            for ($i = $inicio; $i >= $fim; $i--) {
                echo "$i ";
                $soma += $i;
            }
        }

        return $soma;
    }

    echo "Números no intervalo entre $num1 e $num2:<br>";

    $soma = gerarIntSomar($num1, $num2);

    echo "<br>Soma dos números: $soma<br>";

    ?>


</body>

</html>
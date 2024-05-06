<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio13</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um número (1-7): </label>
        <input name="numero_dia" type="number">
        <button type="submit">Enviar</button>
    </form>

    <?php
    function exibirDiaSemana($numero)
    {
        switch ($numero) {
            case 1:
                echo "1 - Domingo<br>";
                break;
            case 2:
                echo "2 - Segunda-feira<br>";
                break;
            case 3:
                echo "3 - Terça-feira<br>";
                break;
            case 4:
                echo "4 - Quarta-feira<br>";
                break;
            case 5:
                echo "5 - Quinta-feira<br>";
                break;
            case 6:
                echo "6 - Sexta-feira<br>";
                break;
            case 7:
                echo "7 - Sábado<br>";
                break;
            default:
                echo "Valor inválido<br>";
        }
    }

    $numero_dia = intval($_GET['numero_dia']);
    exibirDiaSemana($numero_dia);

    ?>

</body>

</html>
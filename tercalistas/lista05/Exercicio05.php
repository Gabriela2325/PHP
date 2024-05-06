<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IExercicio05</title>
</head>

<body>
    <div>
        <h2>Imprimir Sequência de Números</h2>
        <form action="" method="GET">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Imprimir</button>
        </form>

        <?php

    //5. Melhore o programa anterior para que ao receber este valor por parâmetro,ele imprima repetidamente a
    //mesma quantidade de linhas, porém com osnúmeros sendo mostrados em sequência
    // conforme o números de linhas foraumentando

            $numero = intval($_GET['numero']);

            for ($i = 1; $i <= $numero; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "$j ";
                }
                echo "<br>";
            }
    
        ?>
    </div>
</body>

</html>
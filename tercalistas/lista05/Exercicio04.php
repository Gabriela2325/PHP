<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio04</title>
</head>

<body>

    <div>
        <h2>Imprimir Número Repetidamente</h2>
        <form action="" method="GET">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" required><br>
            <button type="submit">Imprimir</button>
        </form>

        <?php

    //4. Faça um programa que receba um número e, usando uma função que recebaeste
    // valor por parâmetro (simples) imprima repetidamente
    // até a linha com onúmero informado mostrando várias vezes o número da linha como

            $numero = intval($_GET['numero']);
            
            for ($i = 1; $i <= $numero; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $i . " ";
                }
                echo "<br>";
            }
        
        ?>

    </div>

</body>

</html>
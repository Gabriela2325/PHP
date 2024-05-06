<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>

<body>

    <div>
        <h2>Desenhar Retângulo</h2>
        <form action="" method="GET">
            <label for="linhas">Digite o número de linhas:</label>
            <input type="number" id="linhas" name="linhas" min="1" value="1" required><br>

            <label for="colunas">Digite o número de colunas:</label>
            <input type="number" id="colunas" name="colunas" min="1" value="1" required><br>

            <button type="submit">Desenhar</button>
        </form>

        <?php

        //3. Construa uma função que desenhe um retângulo usando os caracteres ‘+’ ,‘−’ e ‘| ‘. 
        //Esta função deve receber dois parâmetros,
        // linhas e colunas, sendoadicionado como padrão o valor mínimo igual a 1

            $linhas = intval($_GET['linhas']);
            $colunas = intval($_GET['colunas']);

            function desenharRetangulo($linhas, $colunas) {
                $desenho = '';
                for ($i = 1; $i <= $linhas; $i++) {
                    for ($j = 1; $j <= $colunas; $j++) {
                        if ($i == 1 || $i == $linhas) {
                            $desenho .= '+';
                        } elseif ($j == 1 || $j == $colunas) {
                            $desenho .= '|';
                        } else {
                            $desenho .= '-';
                        }
                    }
                    $desenho .= "<br>";
                }
                return $desenho;
            }

            $retangulo = desenharRetangulo($linhas, $colunas);

            echo "<pre>$retangulo</pre>";
        
        ?>

    </div>

</body>

</html>
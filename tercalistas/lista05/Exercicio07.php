<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio07</title>
</head>

<body>
    <div>
        <h2>Valor da Prestação</h2>
        <form action="" method="GET">
            <label for="valorTotal">Valor Total:</label>
            <input type="number" id="valorTotal" name="valorTotal" required><br>

            <label for="numeroParcelas">Número de Parcelas:</label>
            <input type="number" id="numeroParcelas" name="numeroParcelas" required><br>

            <button type="submit">Calcular Valor da Prestação</button>
        </form>

        <?php
        
    //7. Usando passagem de parâmetro por referência, faça um programa que use afunção
    // valorPagamento() para determinar o valor a ser pago em umaprestação de uma conta. 
    //Ou seja, o programa deverá solicitar ao usuário ovalor e o número de parcelas e
    // com isso passar estes valores para a funçãovalorPagamento(), 
    //que calculará o valor a ser pago e devolverá este valor aoprograma que a 
    //chamou por meio de uma variável referenciada (&). Assim, 
    //oprograma deverá então exibir o valor a ser pago na tela.
    //- Valor Total R$ 1.000;- Você pode pagar R$ 100,00 em 10x;

        // Verificar se o formulário foi submetido e os parâmetros estão definidosif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['valorTotal']) && isset($_GET['numeroParcelas'])) {
          
            $valorTotal = floatval($_GET['valorTotal']);
            $numeroParcelas = intval($_GET['numeroParcelas']);

            function valorPagamento($valorTotal, $numeroParcelas, &$valorPrestacao) {
                $valorPrestacao = $valorTotal / $numeroParcelas;
            }

            $valorPrestacao = 0;

            valorPagamento($valorTotal, $numeroParcelas, $valorPrestacao);

            echo "<p>O valor da prestação é: R$ " . number_format($valorPrestacao, 2) . "</p>";
        
        ?>
    </div>
</body>

</html>
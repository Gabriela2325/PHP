<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipermercado Tabajara</title>
</head>

<body>

    <div>
        <h2>Hipermercado Tabajara</h2>
        <form action="" method="GET">
            <label for="tipo_carne">Digite o tipo de carne (filé, alcatra ou picanha):</label>
            <input type="text" id="tipo_carne" name="tipo_carne" required><br>

            <label for="quantidade">Digite a quantidade de carne (em kg):</label>
            <input type="number" id="quantidade" name="quantidade" step="0.01" required><br>

            <label for="tipo_pagamento">Digite o tipo de pagamento (dinheiro ou tabajara):</label>
            <input type="text" id="tipo_pagamento" name="tipo_pagamento" required><br>

            <button type="submit">Calcular</button>
        </form>

        <?php

    // 30. O Hipermercado Tabajara está com uma promoção de carnes que é imperdível.
    // Paraatender a todos os clientes, cada cliente poderá levar apenas um dos tipos de carneda promoção,
    // porém não há limites para a quantidade de carne por cliente.

            $tipo_carne = strtolower(trim($_GET['tipo_carne']));
            $quantidade = floatval($_GET['quantidade']);
            $tipo_pagamento = strtolower(trim($_GET['tipo_pagamento']));

            $precos = [
                "filé" => 4.90,
                "alcatra" => 5.90,
                "picanha" => 6.90
            ];

            if (!array_key_exists($tipo_carne, $precos)) {
                echo "Tipo de carne inválido.";
                exit();
            }

            $preco_total = $quantidade * $precos[$tipo_carne];

            $desconto = ($tipo_pagamento == 'tabajara') ? $preco_total * 0.05 : 0;

            $valor_a_pagar = $preco_total - $desconto;

            echo "<br><br>Cupom Fiscal<br>";
            echo "Tipo de carne: $tipo_carne<br>";
            echo "Quantidade: $quantidade kg<br>";
            echo "Preço total: R$ " . number_format($preco_total, 2) . "<br>";
            echo "Tipo de pagamento: $tipo_pagamento<br>";
            echo "Desconto: R$ " . number_format($desconto, 2) . "<br>";
            echo "Valor a pagar: R$ " . number_format($valor_a_pagar, 2) . "<br>";
        
        ?>

    </div>

</body>

</html>
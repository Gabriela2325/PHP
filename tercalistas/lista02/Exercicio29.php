<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteira</title>
</head>

<body>

    <div>
        <h2>Fruteira</h2>
        <form action="" method="GET">
            <label for="kg_morangos">Digite a quantidade de morangos (em Kg):</label>
            <input type="number" id="kg_morangos" name="kg_morangos" required><br>

            <label for="kg_macas">Digite a quantidade de maçãs (em Kg):</label>
            <input type="number" id="kg_macas" name="kg_macas" required><br>

            <button type="submit">Calcular</button>
        </form>

        <?php

        
    //29. Uma fruteira está vendendo frutas com a seguinte tabela de preços.
    // Se o clientecomprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar 
    //R$ 25,00,receberá ainda um desconto de 10% sobre este total. Escreva um algoritmo
    // para lera quantidade (em Kg) 
    //de morangos e a quantidade (em Kg) de maças adquiridas eescreva o valor a ser pago pelo cliente

        $kg_morangos = floatval($_GET['kg_morangos']);
        $kg_macas = floatval($_GET['kg_macas']);

        $preco_morangos = 2.50;
        $preco_macas = 1.80;

        $valor_total_sem_desconto = ($kg_morangos * $preco_morangos) + ($kg_macas * $preco_macas);

        if ($kg_morangos + $kg_macas > 8 || $valor_total_sem_desconto > 25) {
            $desconto = $valor_total_sem_desconto * 0.10;
            $valor_total_com_desconto = $valor_total_sem_desconto - $desconto;
        } else {
            $valor_total_com_desconto = $valor_total_sem_desconto;
        }

        echo "Valor total a ser pago pelo cliente: R$ " . number_format($valor_total_com_desconto, 2);

        ?>

    </div>

</body>

</html>
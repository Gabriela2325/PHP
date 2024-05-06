<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posto de Combustível</title>
</head>

<body>

    <div>
        <h2>Posto de Combustível</h2>
        <form action="" method="GET">
            <label for="litros">Digite o número de litros vendidos:</label>
            <input type="number" id="litros" name="litros" required><br>

            <label for="tipo_combustivel">Escolha o tipo de combustível:</label>
            <select id="tipo_combustivel" name="tipo_combustivel" required>
                <option value="A">Álcool</option>
                <option value="G">Gasolina</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <?php
            $litros = floatval($_GET['litros']);
            $tipo_combustivel = strtoupper($_GET['tipo_combustivel']);

            $preco_alcool = 1.90;
            $preco_gasolina = 2.50;

            if ($tipo_combustivel == 'A') {
                $desconto = $litros <= 20 ? 0.03 : 0.05;
                $preco = $preco_alcool;
            } elseif ($tipo_combustivel == 'G') {
                $desconto = $litros <= 20 ? 0.04 : 0.06;
                $preco = $preco_gasolina;
            } else {
                echo "Tipo de combustível inválido.";
                exit();
            }

            $valor_total = $litros * ($preco - ($preco * $desconto));

            echo "Valor total a ser pago pelo cliente: R$ " . number_format($valor_total, 2);
        
        ?>

    </div>

</body>

</html>
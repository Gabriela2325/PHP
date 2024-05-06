<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com Características dos Números</title>
</head>

<body>

    <div>
        <h2>Calculadora com Características dos Números</h2>
        <form action="" method="GET">
            <label for="numero1">Digite o primeiro número:</label>
            <input id="numero1" name="numero1" type="number" required>

            <label for="numero2">Digite o segundo número:</label>
            <input id="numero2" name="numero2" type="number" required>

            <label for="operacao">Escolha a operação:</label>
            <select id="operacao" name="operacao" required>
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <?php
       
            $numero1 = floatval($_GET['numero1']);
            $numero2 = floatval($_GET['numero2']);
            $operacao = $_GET['operacao'];

            function parOuImpar($numero) {
                return $numero % 2 == 0 ? "par" : "ímpar";
            }

            function positivoOuNegativo($numero) {
                return $numero >= 0 ? "positivo" : "negativo";
            }

            function inteiroOuDecimal($numero) {
                return $numero == round($numero) ? "inteiro" : "decimal";
            }

            switch ($operacao) {
                case '+':
                    $resultado = $numero1 + $numero2;
                    break;
                case '-':
                    $resultado = $numero1 - $numero2;
                    break;
                case '*':
                    $resultado = $numero1 * $numero2;
                    break;
                case '/':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        echo "Não é possível dividir por zero.";
                        exit();
                    }
                    break;
                default:
                    echo "Operação inválida.";
                    exit();
            }

            echo "<p>O resultado da operação é: $resultado</p>";
            echo "<p>O primeiro número é " . parOuImpar($numero1) . ", " . positivoOuNegativo($numero1) . " e " . inteiroOuDecimal($numero1) . ".</p>";
            echo "<p>O segundo número é " . parOuImpar($numero2) . ", " . positivoOuNegativo($numero2) . " e " . inteiroOuDecimal($numero2) . ".</p>";
        
        ?>

    </div>

</body>

</html>
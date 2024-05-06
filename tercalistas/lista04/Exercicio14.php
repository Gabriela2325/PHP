
// 14.  Em uma competição de salto em distância cada atleta tem direito a cincos saltos 
//o resultado do Atleta é determinado pela média dos cinco valores altos você deve fazer um
// programa que tenha o nome e a cinco distâncias alcançadas 
//pelo atleta em seu saltos e depois informe o nome os saltos e a média do saltos

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competição de Salto em Distância</title>
</head>

<body>

    <div>
        <h2>Competição de Salto em Distância</h2>
        <form action="" method="GET">
            <label for="nome_atleta">Digite o nome do atleta:</label>
            <input type="text" id="nome_atleta" name="nome_atleta" required><br>

            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<label for='salto_$i'>Digite a distância do salto $i:</label>";
                echo "<input type='number' id='salto_$i' name='saltos[]' step='0.01' required><br>";
            }
            ?>
            <button type="submit">Calcular Média</button>
        </form>

        <?php

        
    // 14.  Em uma competição de salto em distância cada atleta tem direito a cincos saltos 
    //o resultado do Atleta é determinado pela média dos cinco valores altos você deve fazer um
    // programa que tenha o nome e a cinco distâncias alcançadas 
    //pelo atleta em seu saltos e depois informe o nome os saltos e a média do saltos

            $nome_atleta = $_GET['nome_atleta'];
            $saltos = $_GET['saltos'];

            function calcularMedia($valores) {
                $soma = array_sum($valores);
                return $soma / count($valores);
            }

            $media_saltos = calcularMedia($saltos);

            echo "<br>Nome do atleta: $nome_atleta<br>";
            echo "Distâncias alcançadas nos saltos: " . implode(", ", $saltos) . "<br>";
            echo "Média dos saltos: $media_saltos<br>";
        
        ?>

    </div>

</body>

</html>
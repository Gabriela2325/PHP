<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>

<body>

    <div>
        <h2>Conversor de Data</h2>
        <form action="" method="GET">
            <label for="data">Digite a data no formato DD/MM/AAAA:</label>
            <input type="text" id="data" name="data" required><br>

            <button type="submit">Converter</button>
        </form>

        <?php

    //2. Construa uma função que receba uma data no formato DD/MM/AAAA edevolva uma string no formato
    // Dia de Mês Por Extenso de AAAA.Opcionalmente,
    // valide a data e retorne NULL caso a data seja inválida.
    //a. Entra: 10/02/2023
    //b. Retorna: 10 de Março de 2023

            $data = $_GET['data'];

            function converterData($data) {
                $partes = explode('/', $data);
                if (count($partes) != 3) {
                    return null;
                }

                $dia = intval($partes[0]);
                $mes = intval($partes[1]);
                $ano = intval($partes[2]);

                if (!checkdate($mes, $dia, $ano)) {
                    return null; 
                }

                $meses = [
                    'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
                    'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
                ];

                return "$dia de " . $meses[$mes - 1] . " de $ano";
            }

            $data_convertida = converterData($data);

            if ($data_convertida !== null) {
                echo "<br>A data $data foi convertida para: $data_convertida";
            } else {
                echo "<br>A data $data é inválida. Por favor, insira no formato DD/MM/AAAA.";
            }
        
        ?>

    </div>

</body>

</html>
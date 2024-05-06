<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Data</title>
</head>

<body>

    <div>
        <h2>Validação de Data</h2>
        <form action="" method="GET">
            <label for="data">Digite uma data no formato dd/mm/aaaa:</label>
            <input type="text" id="data" name="data" required><br>
            <button type="submit">Verificar</button>
        </form>

        <?php

        //19. Faça um Programa que peça uma data no formato
        // dd/mm/aaaa e determine se amesma é uma data válida.

        function validarData($data) {
            $padrao_data = "/^(\d{2})\/(\d{2})\/(\d{4})$/";

            if (preg_match($padrao_data, $data, $matches)) {
                $dia = intval($matches[1]);
                $mes = intval($matches[2]);
                $ano = intval($matches[3]);

                return checkdate($mes, $dia, $ano);
            } else {
                return false;
            }
        }
    
            $data = $_GET['data'];

            if (validarData($data)) {
                echo "<br>A data $data é válida.";
            } else {
                echo "<br>A data $data não é válida. Certifique-se de inserir no formato dd/mm/aaaa.";
            }
        
        ?>

    </div>

</body>

</html>

        
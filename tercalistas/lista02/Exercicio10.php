<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio10</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o turno em que você estuda (M-matutino, V-Vespertino, N-Noturno): </label>
        <input name="turno" type="text" required>

        <button type="submit">Enviar</button>
    </form>

    <?php

    $turno = $_GET['turno'];

    $turno = strtoupper($_GET['turno']);

    switch ($turno) {
        case 'M':
            echo "Bom Dia!";
            break;
        case 'V':
            echo "Boa Tarde!";
            break;
        case 'N':
            echo "Boa Noite!";
            break;
        default:
            echo "Valor Inválido!";
    }

    ?>

</body>

</html>
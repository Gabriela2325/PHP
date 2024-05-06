<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio04</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite uma letra:</label>
        <input name="letra" type="int">

        <button type=" submit">Enviar</button>
    </form>

    <?php

    //4. Faça um Programa que verifique se uma letra digitada é vogal ou consoante

    $letra = $_GET['letra'];

    $letra = strtolower($letra); // conversão da letra para minúscula

    if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
        echo "A letra digitada é uma vogal.<br>";
    } elseif (ctype_alpha($letra)) {
        echo "A letra digitada é uma consoante.<br>";
    } else {
        echo "Caractere inválido, por favor, digite uma letra.<br>";
    }

    ?>

</body>

</html>
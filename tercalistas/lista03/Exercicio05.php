<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio05</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um número inteiro de 1 a 10 para gerar a tabuada:</label>
        <input name="num" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //5.	Desenvolva um gerador de tabuada, capaz de gerar a tabuada de qualquer número inteiro entre 1 a IO. 
    //O usuário deve informar de qual numero ele deseja ver a tabuada. A saída deve ser conforme o exemplo abaixo:

 
   $num = (int)$_GET['num'];

    echo "Tabuada do número $num:<br>";

    for ($i = 1; $i <= 10; $i++) {
        $res = $num * $i;
        echo "$num x $i = $res<br>";
    }

    ?>

</body>

</html>
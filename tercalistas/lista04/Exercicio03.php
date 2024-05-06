<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite a primeira nota:</label>
        <input name="nota1" type="number">

        <label>Digite a segunda nota:</label>
        <input name="nota2" type="number">

        <label>Digite a terceira nota:</label>
        <input name="nota3" type="number">

        <label>Digite a quarta nota:</label>
        <input name="nota4" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    //3. faça um programa que receba 4 notas, motre as nota e a media na tela
    // Função para calcular a média das notas

    $nota1 = (int)$_GET['nota1'];
    $nota2 = (int)$_GET['nota2'];
    $nota3 = (int)$_GET['nota3'];
    $nota4 = (int)$_GET['nota4'];

    function calcularMedia($notas)
    {
        $soma = array_sum($notas);

        $media = $soma / count($notas);

        return $media;
    }

    $notas = array($nota1, $nota2, $nota3, $nota4);

    echo "<br>Notas digitadas:<br>";
    foreach ($notas as $nota) {
        echo $nota . "<br>";
    }

    $media = calcularMedia($notas);

    echo "<br>Média das notas: $media<br>";

    ?>


</body>

</html>
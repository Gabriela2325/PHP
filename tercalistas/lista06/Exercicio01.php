<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<body>
    <h2>Exercicio01</h2>
    <form method="post">
        <label for="string1">Digite a primeira string:</label><br>
        <input type="text" id="string1" name="string1"><br><br>
        
        <label for="string2">Digite a segunda string:</label><br>
        <input type="text" id="string2" name="string2"><br><br>
        
        <input type="submit" value="Comparar">
    </form>

    <?php

    //1. Faça um programa que receba 2 strings e informe o conteúdo delas seguidodo seu comprimento.
    // Informe também se as duas strings possuem o mesmocomprimento e são iguais ou diferentes no conteúdo

    function compararStrings($string1, $string2) {
        $tamanho_string1 = strlen($string1);
        $tamanho_string2 = strlen($string2);
        
        echo "<p>String 1: $string1, Tamanho: $tamanho_string1 caracteres</p>";
        echo "<p>String 2: $string2, Tamanho: $tamanho_string2 caracteres</p>";
        
        if ($tamanho_string1 == $tamanho_string2) {
            echo "<p>As duas strings possuem o mesmo comprimento.</p>";
        } else {
            echo "<p>As duas strings possuem comprimentos diferentes.</p>";
        }
        
        if ($string1 === $string2) {
            echo "<p>As duas strings possuem o mesmo conteúdo.</p>";
        } else {
            echo "<p>As duas strings possuem conteúdos diferentes.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];
        
        compararStrings($string1, $string2);
    }
    ?>
</body>
</html>
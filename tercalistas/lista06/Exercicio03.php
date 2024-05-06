<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>
    <h2>Exercicio03</h2>
    <form method="post">
        <label for="frase">Digite uma frase:</label><br>
        <textarea id="frase" name="frase" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Analisar">
    </form>

    <?php

    //3. Dado uma string com uma frase informada pelo usuário, faça um programaque conte e mostre na tela:
    //a. Quantos espaços em branco existem na frase.b. Quantas vezes aparecem as vogais a, e, i, o, u
    function contarEspacos($frase) {
        $espacos = substr_count($frase, ' ');
        echo "Quantidade de espaços em branco: $espacos <br>";
    }

    function contarVogais($frase) {
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $contagem = array_fill_keys($vogais, 0);

        foreach (str_split($frase) as $letra) {
            if (in_array(strtolower($letra), $vogais)) {
                $contagem[strtolower($letra)]++;
            }
        }

        echo "Quantidade de vezes que aparecem as vogais: <br>";
        foreach ($contagem as $vogal => $quantidade) {
            echo strtoupper($vogal) . ": $quantidade <br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST["frase"];
        contarEspacos($frase);
        contarVogais($frase);
    }
    ?>
</body>
</html>
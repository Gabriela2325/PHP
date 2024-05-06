<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
    <h2>Exercicio02</h2>
    <form method="post">
        <label for="nome">Digite o seu nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        
        <input type="submit" value="Mostrar Nome de Trás para Frente">
    </form>

    <?php

    //2. Faça um programa que permita ao usuário digitar o seu nome e em seguidamostre o nome do usuário
    /// de trás para frente utilizando somente letrasmaiusculas. 
    // Dica: lembre−se que ao informar o nome o usuário pode digitarletras maiusculas ou minúsculas.
    // Depois, crie funções diferentes para que onome possa ser apresentado das seguintes formas
    function nomeTrasParaFrente($nome) {
        $nomeInvertido = strtoupper(strrev($nome));
        echo "Nome de trás para frente: $nomeInvertido <br>";
    }

    function nomeAbreviado($nome) {
        $partesNome = explode(" ", $nome);
        $abreviado = '';
        foreach ($partesNome as $parte) {
            $abreviado .= strtoupper(substr($parte, 0, 1)).'---';
        }
        echo "Nome abreviado: ".trim($abreviado, '-')." <br>";
    }

    function nomeCrescente($nome) {
        $partesNome = explode(" ", $nome);
        $tamanhoNome = count($partesNome);
        $nomeCrescente = '';
        for ($i = 0; $i < $tamanhoNome; $i++) {
            $nomeCrescente .= strtoupper(substr($partesNome[$i], 0, $i + 1)).'---';
        }
        echo "Nome crescente: ".trim($nomeCrescente, '-')." <br>";
    }

    function nomeDecrescente($nome) {
        $partesNome = explode(" ", $nome);
        $tamanhoNome = count($partesNome);
        $nomeDecrescente = '';
        for ($i = $tamanhoNome; $i > 0; $i--) {
            $nomeDecrescente .= strtoupper(substr($partesNome[$tamanhoNome - $i], 0, $i)).'---';
        }
        echo "Nome decrescente: ".trim($nomeDecrescente, '-')." <br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        nomeTrasParaFrente($nome);
        nomeAbreviado($nome);
        nomeCrescente($nome);
        nomeDecrescente($nome);
    }
    ?>
</body>
</html>

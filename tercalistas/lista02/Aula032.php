<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - IF</title>
</head>
<body>
        
    <form action="" method="GET">
        <label>Digite um numero:</label>
        <input name="ano" type="text">

        <button type="submit">Enviar</button>
    </form>



    <?php 

        $ano = $_GET['ano'];
        $idade = 2024 - $ano;
        echo "<p>Ano: {$ano} - Idade: {$idade}</p>";

        if($idade >= 18){
            echo "<p>Legal, vc pode dirigir. - e votar - </p>";
        } else if($idade > 16){
            echo "<p>vc pode votar mas nao dirigir</p>";
        } else {
            echo "<p>NAO pode dirigir NEM votar</p>";
        }

    ?>


</body>
</html>

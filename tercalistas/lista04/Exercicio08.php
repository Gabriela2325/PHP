<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idades e Alturas</title>
</head>

<body>

    <div>
        <h2>Idades e Alturas</h2>
        <form action="" method="GET">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<label for='idade_$i'>Digite a idade da pessoa $i:</label>";
                echo "<input type='number' id='idade_$i' name='idades[]' required><br>";

                echo "<label for='altura_$i'>Digite a altura da pessoa $i:</label>";
                echo "<input type='number' id='altura_$i' name='alturas[]' step='0.01' required><br>";
            }
            ?>
            <button type="submit">Imprimir</button>
        </form>

        <?php

        
    //  8.faça um programa que tenha a idade e a altura de 5 pesoas,cada uma em seu respectivo vetor.
    //imprima a idade e a altura na ordem inversa a ordem lida 

            $idades = $_GET['idades'];
            $alturas = $_GET['alturas'];

            echo "<br>Idades na ordem inversa:<br>";
            for ($i = 4; $i >= 0; $i--) {
                echo $idades[$i] . "<br>";
            }

            echo "<br>Alturas na ordem inversa:<br>";
            for ($i = 4; $i >= 0; $i--) {
                echo $alturas[$i] . "<br>";
            }
        
        ?>

    </div>

</body>

</html>
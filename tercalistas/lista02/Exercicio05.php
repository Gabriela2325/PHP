<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio05</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite nota 1: </label>
        <input name="nota1" type="number" required>

        <label>Digite nota 2: </label>
        <input name="nota2" type="number" required>

        <button type="submit">Enviar</button>
    </form>

    <?php 
    
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];

        function calcularMedia($nota1, $nota2) {
            $media = ($nota1 + $nota2) / 2;

            if ($media == 10) {
                echo "Aprovado com Distinção<br>";
            } elseif ($media >= 7) {
                echo "Aprovado<br>";
            } else {
                echo "Reprovado<br>";
            }
        }

        calcularMedia($nota1, $nota2);

    ?>

</body>

</html>
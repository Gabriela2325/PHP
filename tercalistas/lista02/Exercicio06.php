<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio06</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite nota 1: </label>
        <input name="nota1" type="number" required>

        <label>Digite nota 2: </label>
        <input name="nota2" type="number" required>

        <label>Digite nota 3: </label>
        <input name="nota3" type="number" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    
        $nota1 = ($_GET['nota1']);
        $nota2 = ($_GET['nota2']);
        $nota3 = ($_GET['nota3']);

        if ($nota1 > $nota2 && $nota1 > $nota3) {
            echo "A primeira nota é a maior: $nota1";
        } elseif ($nota2 > $nota3) {
            echo "A segunda nota é a maior: $nota2";
        } else {
            echo "A terceira nota é a maior: $nota3";
        }
    
    ?>

</body>

</html>
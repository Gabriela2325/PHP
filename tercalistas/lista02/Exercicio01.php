<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o primeiro numero :</label>
        <input name="num1" type="int">

        <label>Digite o segundo numero :</label>
        <input name="num2" type="int">

        <button type=" submit">Enviar</button>
    </form>

    <?php 

    //1. Faça um Programa que peça dois números e imprima o maior deles.

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    if ($num1 > $num2) {
        echo "O maior número é: " . $num1 . "<br>";
    } elseif ($num2 > $num1) {
        echo "O maior número é: " . $num2 . "<br>";
    } else {
        echo "Os números são iguais.<br>";
    }
 
    ?>

</body>

</html>
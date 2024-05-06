<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite um valor :</label>
        <input name="valor" type="int">

        <button type=" submit">Enviar</button>
    </form>

    <?php 

   // 2. Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo

    $valor = $_GET['valor'];

    if ($valor >= 0 ) {
        echo "O  número é positivo <br>";
    }else {
        echo "O  número é negativo <br>";
    }
 
    ?>

</body>

</html>
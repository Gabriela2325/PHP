<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite o primeiro número inteiro:</label>
        <input name="num1" type="number">

        <label>Digite o segundo número inteiro:</label>
        <input name="num2" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php
   
        $num1 = (int)$_GET['num1'];
        $num2 = (int)$_GET['num2'];

        function gerarInt($inicio, $fim)
        {
            if ($inicio < $fim) {
                for ($i = $inicio; $i <= $fim; $i++) {
                    echo "$i ";
                }
            } else {
                for ($i = $inicio; $i >= $fim; $i--) {
                    echo "$i ";
                }
            }
        }

        echo "Números no intervalo entre $num1 e $num2:<br>";
        gerarInt($num1, $num2);
    
    ?>

</body>

</html>
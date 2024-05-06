<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite F ou M :</label>
        <input name="letra" type="int">

        <button type=" submit">Enviar</button>
    </form>

    <?php 

   //3. Faça um Programa que verifique se uma letra digitada é "F" ou "M". 
    //Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido

    $letra =  strtoupper($_GET['letra']);;
   
    if ($letra == "F" || $letra == "f") {

        echo "F - Feminino\n";

    } elseif ($letra == "M" || $letra == "m") {

        echo "M - Masculino<br>";

    } else {

        echo "Sexo Inválido<br>";
    }

    ?>

</body>

</html>
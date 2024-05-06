<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - if</title>
</head>
<body>
    
</body>

<form action="" method="GET"> 
    <label >Digite um número </label>
    <input name ="num" type="text">

    <button type="submit">Enviar </button>

</form>

<?php

    $ano = $_GET['ano'];
    $idade = 2024 - $ano;

    echo "<p>Ano: {$ano} - Idade: {$idade}</p>" ;

    /// if em php 
    if($idade >= 18){

        echo "<p>Legal, vc pode dirigir. - E votar </p>";

    }else if($idade > 16){

            echo "<p>Não pode dirigir mas pode votar.</p>";

    } else{ 

        echo "<p>Não pode dirigir NEM votar.</p>";

    }

?>

<?php 

    $sexo = strtoupper($_GET['sexo']);

    switch($variable){
        case 'F';

        echo"Voce selecionou F - Feminino";
  
        break;

        case 'M' ;

        echo"Voce selecionou M - Masculino";

        break;

        default;

        echo "Digite novamente";

        break;
       

    }





?>




</html>
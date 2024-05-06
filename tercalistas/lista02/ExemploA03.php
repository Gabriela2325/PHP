<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - SWITCH</title>
</head>

<body>

    <form action="" method="GET">
        <label>Digite F ou M:</label>
        <input name="sexo" type="text">

        <button type="submit">Enviar</button>
    </form>

    <?php 
    
        $sexo = strtoupper($_GET['sexo']);
        
        switch ($sexo) {
            case 'F':
                echo "Voce selecionou F - Feminino";
                break;
                
            case 'M':
                echo "Voce selecionou M - Masculino";
                break;
            
            default:
                echo "Digite novamente";
                break;
        }
    
    ?>


</body>

</html>
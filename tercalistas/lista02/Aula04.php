<?php 

    echo "<h1>Aula 04 - For, While, DoWhile</h1>";

    /*
    echo "<h3>FOR</h3>";
    for($i = 0; $i < 10; $i++){
        echo "<br> Meu FOR FUNCIONA!! {$i}";
    }

    echo "<br><br>";
    
    for($i = 0; $i < 10; $i++){
        echo "<br> Linha: {$i}";
        for($j = 0; $j < 10; $j++){ 
            echo " - Coluna: {$j}";
        }
    }
    
    echo "<br><br>";
    echo "<h3>WHILE</h3>";
    
    $a = 0;
    while($a < 10){
        echo "<br> Numero: {$a} ";
        $a += 3;
    }
    
    
    echo "<br><br>";
    echo "<h3>DO WHILE</h3>";
    
    $var = 200;
    do{
        echo "<br> Numero: {$var}";
        $var += 6;
    }while($var < 100);

    */

    echo "<br><br>";
    echo "<h3>ARRAYS</h3>";

    $comidas = array("Batata", "Miojo", "Polenta");
    // echo var_dump($comidas);
    echo print_r($comidas);
    
    $comidas[3] = "Arroz";
    $comidas[20] = "Feijão";
    // $comidas[30] = 30.6;
    // $comidas[22] = M_PI;
    
    echo "<br>";
    $totalComida = count($comidas);
    echo "Tamanho da Lista: {$totalComida} <br>";
    echo print_r($comidas);

    echo "<br><br>Lista de Compra: ";

    /*for ($i=0; $i < count($comidas); $i++) { 
        echo "<li> Item {$i}: - " . $comidas[$i];
    }*/

    // $comidas[i]
    // $comida
    // para cada $comida dentro do array $comidas faça:
    foreach($comidas as $comida){
        echo "<li> Item: - " . $comida;
    }


    echo "<br><br>";
    echo "<h4>Array com indice str</h4>";
    $pessoa = array("nome" => "Romario", "idade" => 32);
    echo $pessoa["nome"];
    echo "<br>";
    echo print_r($pessoa);

    echo "<br><br>";
    echo "<h4>Array de array</h4>";
    $varias_pessoas = array(
        array("nome" =>"José", "idade" => 18),
        array("nome" =>"Maria", "idade" => 22),
        array("nome" =>"Paulo", "idade" => 19)
    );

    echo print_r($varias_pessoas);

?>
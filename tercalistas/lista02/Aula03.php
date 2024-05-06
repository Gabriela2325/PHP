<form action="" method="GET">
    <label>Digite um numero:</label>
    <input name="num" type="text">

    <button type="submit">Enviar</button>
</form>


<?php

    $raio = $_GET['num'];

    $area = M_PI * pow($raio, 2);
    $perimetro = 2 * M_PI * $raio;
    
    echo "<p>";
    echo "Raio escolhido: " . $raio;
    echo "<br>Área deste círculo: " . number_format($area, 2, ',', ' ');
    echo "<br>Perímetro deste círculo: " . number_format($perimetro, 2, ',', ' ');
    echo "<br> Variaveis - Raio: {$raio} - Area: {$area}  - Perimetro: {$perimetro} - ";
    echo "</p>";

    echo "<h3> Funcoes Uteis </h3>";
    echo "<p>Potencia: " . pow($raio, 4);
    echo "<br>Modulo ABS: " . abs($raio); // |-4| e |4| => 4
    echo "<br>Raiz Quadrada: " . sqrt($raio);
    
    echo "<br><br>Arredondar Normal: " . round($raio);
    echo "<br>Arredondar Para Baixo: " . floor($raio);
    echo "<br>Arredondar Para Cima: " . ceil($raio);
    echo "<br>Inteira: " . intval($raio);


    echo "<h3> Mini Matematica </h3>";
    
    $a = 1;
    $b = 3;
    $c = $a + $b;

    $c = $c + 5;
    $c += 5;

    $a = $a + 1;
    $a += 1;
    $a++;

    $b = $b - 1;
    $b -= 1;
    $b--;

    $var = 80;
    echo "<br>Var: " . $var++;
    echo "<br>Var: " . $var;
    echo "<br>Var: " . ++$var;
    
    $var = 80;
    echo "<br><br>Var: " . $var--;
    echo "<br>Var: " . $var;
    echo "<br>Var: " . --$var;

    $var = "vanderley";
    
    $$var = "teste";

    $$$$$teste


?>
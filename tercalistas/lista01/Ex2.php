<form action="" method="GET"> 
    <label >Digite um número </label>
    <input name ="num" type="text">

    <button type="submit">Enviar </button>

</form>
<?php
// 2. Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo. Obs. procure por M_PI.

    $raio = $_GET['num'];

    $perimetro = 2 * M_PI * $raio;
    $area = M_PI* pow($raio,2);

    echo "<p>";
    echo "O raio escolhido é:" . number_format($raio,2,',','.'); 
    echo "<br>O perímetro do círculo é: " . number_format($perimetro,2,',','.');
    echo "<br>A área do círculo é: " . number_format($area,2,',','.');
    echo "<br> Variaveis - Raio: {$raio} - Area: {$area} - Perimetro: {$perimetro}";
    echo "</p>";

    echo "<h3> Funcoes Uteis </h3>";
    echo "Potencia: " . pow($raio, 4);
    echo "<br>Modulo ABS: " . abs($raio); // |-4| e |4| => 4
    echo "<br>Raiz quadrada: " . sqrt($raio);

    echo "<br><br>Arredondar Normal: " . round($raio);
    echo "<br>Arredondar Para Baixo: " . floor($raio);
    echo "<br>Arredondar Para cima: " . ceil($raio);
    echo "<br>Inteira : " . intval($raio);

    echo "<h3> Mini matematica </h3>";

    $a = 1;
    $a = 3;
    $c = $a + $b;

    $c = $c + 5;
    $c =+ 5;

    $a = $a +1;
    $a =+ 1;
    $a++;

    $b = $b - 1;
    $b -= 1;
    $b-- ;

    $var = 80;

    echo "<br>Var: " . $var++;
    echo "<br>Var: " . $var;
    echo "<br>Var: " . ++$var;

    echo "<br>Var: " . $var--;
    echo "<br>Var: " . $var;
    echo "<br>Var: " . --$var;

    $var = "vanderley";
    $$var = 10;









?>

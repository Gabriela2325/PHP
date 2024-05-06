<?php
//10.Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
// a. O produto do dobro do primeiro com metade do segundo.
// b. A soma do triplo do primeiro com o terceiro.
// c. O terceiro elevado ao cubo.

    $int1 = 5 ;
    $int2 = 10 ;
    $real = 6.5 ;

    echo "O produto do dobro do primeiro com metade do segundo. : " . ($int1 * 2) * ($int2 / 2); // a
    
    echo "A soma do triplo do primeiro com o terceiro.: " . ($int1 * 3) + $real; //b

    echo "O terceiro elevado ao cubo:  " . $real ** 3 ; // cubo
?>
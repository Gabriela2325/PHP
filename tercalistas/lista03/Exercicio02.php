<?php

    //2.	Faça um programa que imprima na tela apenas os números ímpares entre I e 50 
    // Imprime apenas os números ímpares entre 1 e 50

    echo "Números ímpares entre 1 e 50:<br>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 != 0) {
            echo "$i<br>";
        }
    }   
    
?>
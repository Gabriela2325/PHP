<?php

//1. Faça um programa que imprima na tela os números de 1 a 20,
// um abaixo do outro  Depois modifique 0 programa para que ele mostre os números um ao lado do outro 

echo "Números de 1 a 20 um abaixo do outro:<br>";
for ($i = 1; $i <= 20; $i++) {
    echo "$i<br>";
}

echo "\nNúmeros de 1 a 20 um ao lado do outro: ";
for ($i = 1; $i <= 20; $i++) {
    echo "$i ";
}
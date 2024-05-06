<?php 

//21. Observando os termos no plural a colocação do "e", da vírgula entre outros.
//Exemplo:
//a. 326 = 3 centenas, 2 dezenas e 6 unidades
//b. 12 = 1 dezena e 2 unidades Testar com: 326, 300, 100, 320, 310,305,
// 301,101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16

function imprimirTermos($numero) {
    $unidades = ["", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"];
    $dezenas = ["", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"];
    $centenas = ["", "cento", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos"];

    $digitos = str_split(str_pad($numero, 3, "0", STR_PAD_LEFT));

    $centena = intval($digitos[0]);
    $dezena = intval($digitos[1]);
    $unidade = intval($digitos[2]);

    $termos = [];

    if ($centena > 0) {
        $termos[] = $centenas[$centena];
    }

    if ($dezena > 0) {
        if ($dezena == 1 && $unidade > 0) {
            $termos[] = "e";
            $termos[] = $unidades[$unidade];
        } else {
            $termos[] = $dezenas[$dezena];
        }
    }

    if ($unidade > 0 && $dezena != 1) {
        $termos[] = "e";
        $termos[] = $unidades[$unidade];
    }

    echo implode(" ", $termos);
}

$numeros = [326, 300, 100, 320, 310, 305, 301, 101, 311, 111, 25, 20, 10, 21, 11, 1, 7, 16];

foreach ($numeros as $numero) {
    echo "$numero = ";
    imprimirTermos($numero);
    echo "<br>";
}
?>
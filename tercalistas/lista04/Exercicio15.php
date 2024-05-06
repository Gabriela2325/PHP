<?php 
//   15.Melhore o programa anterior que continua o Array de uma única pessoa para um programa que tenha um
//Array de várias pessoas (Array de Array)
//calculando e mostrando as mesmas informações para cada um presente no Array


function calcularMedia($valores) {
    $soma = array_sum($valores);
    return $soma / count($valores);
}


$pessoas = array(
    array("nome" => "Atleta 1", "saltos" => array(5.6, 5.8, 6.0, 5.7, 5.9)),
    array("nome" => "Atleta 2", "saltos" => array(5.9, 5.5, 6.1, 6.0, 5.8)),
    array("nome" => "Atleta 3", "saltos" => array(6.2, 6.1, 5.9, 6.3, 6.0))
);


foreach ($pessoas as $pessoa) {
    $nome_atleta = $pessoa["nome"];
    $saltos = $pessoa["saltos"];
    $media_saltos = calcularMedia($saltos);

    echo "Nome do atleta: $nome_atleta<br>";
    echo "Distâncias alcançadas nos saltos: " . implode(", ", $saltos) . "<br>";
    echo "Média dos saltos: $media_saltos<br>";
    echo "<br>"; 
}

?>
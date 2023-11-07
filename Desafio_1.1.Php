<?php
function encontrarNumerosFaltando($array) {
    $maiorNumero = max($array);
    $menorNumero = min($array);
    $todosNumeros = range($maiorNumero, $menorNumero);
    $numerosFaltando = array_diff($todosNumeros, $array);
    return print_r($numerosFaltando);
}

$teste = array(1, 2, 3, 6, 7, 9);
encontrarNumerosFaltando($teste);

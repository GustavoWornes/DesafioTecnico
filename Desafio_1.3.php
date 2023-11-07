<?php

function encontrarTresConsecutivosSomandoZero($entrada,$Soma) {
    $tamanho = count($entrada);
    // Verificar apenas a partir do índice 0 até o índice 2 antes do último
    for ($i = 0; $i < $tamanho - 2; $i++) {
        $n1 = $entrada[$i];
        $n2 = $entrada[$i + 1];
        $n3 = $entrada[$i + 2];

        // Verificar se a soma dos três números é igual a zero
        if ($n1 + $n2 + $n3 === $Soma) {
            print_r(array($n1, $n2, $n3));
        }
    }
 
    return print_r("Não há número consecutivos ao qual a soma seja igual a zero");
}

$entrada = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
encontrarTresConsecutivosSomandoZero($entrada,16);



<?php

function encontrarTresConsecutivosSomandoZero($entrada) {
    $tamanho = count($entrada);

    // Verificar apenas a partir do índice 0 até o índice 2 antes do último
    for ($i = 0; $i < $tamanho - 2; $i++) {
        $n1 = $entrada[$i];
        $n2 = $entrada[$i + 1];
        $n3 = $entrada[$i + 2];

        // Verificar se a soma dos três números é igual a zero
        if ($n1 + $n2 + $n3 === 0) {
            return print_r(array("Três números consecutivos somando que é igual a zero",$n1, $n2, $n3));
        }
    }
    return print_r("Não há número consecutivos ao qual a soma seja igual a zero");
}

$entrada = array(2, -1, 1, 0, 3, -2, -1);
encontrarTresConsecutivosSomandoZero($entrada);



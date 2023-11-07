<?php
function encontrarRepetidos($entrada) {
    $numerosNaoRepetidos = array();

    for ($i = 0; $i < count($entrada); $i++) {
        $repetiu = false;

        for ($i2 = 0; $i2 < count($entrada); $i2++) {
            if ($i !== $i2 && $entrada[$i] === $entrada[$i2]) {
                $repetiu = true;
                break;
            }
        }

        if (!$repetiu) {
            $numerosNaoRepetidos[] = $entrada[$i];
        }
    }

    return $numerosNaoRepetidos;
}

$entrada = array(5, 3, 4, 3, 5, 5, 3);
$numerosNaoRepetidos = encontrarRepetidos($entrada);

echo "Números não repetidos: " . implode(", ", $numerosNaoRepetidos);

<?php
function Fibonacci($n) {
    $Seguencia = array();
    $a = 1;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        $Seguencia[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    return $Seguencia;
}

$n = 6;
$fibSequence = Fibonacci($n);

echo "Sequência Fibonacci com $n elementos: " . implode(", ", $fibSequence);







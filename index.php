<?php
function fibonacci_index($num) {
    $f1 = -1;
    $f2 = 1;
    global $f;
    for ($i = 1; $i <= $num; $i++) {
        $f = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f;

    }
    return $f;
}

echo fibonacci_index(10);
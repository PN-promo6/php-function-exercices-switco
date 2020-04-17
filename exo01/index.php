<?php

function sumAll(int $n)
{
    $total = 0;
    for ($i = 0; $i < $n; $i++) {
        $total = $total + $i;
    }
    return $total;
}

echo sumAll(8);
// additionne 1+2+3+4+5+6+7 = 28

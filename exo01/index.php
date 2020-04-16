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

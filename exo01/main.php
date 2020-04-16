<?php

function sumAll($number)
{
    $total = 0;
    for ($i = 0; $i < $number; $i++) {
        $total = $total + $i;
    }
    return $total;
}

echo sumAll(10);

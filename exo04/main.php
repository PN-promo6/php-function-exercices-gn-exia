<?php

function Sum($arrayOfNumbers)
{
    $sum = 0;
    for ($i = 0; $i < count($arrayOfNumbers); $i++) {
        $currentElement = $arrayOfNumbers[$i];

        if (is_array($currentElement)) {
            $sum = $sum + Sum($currentElement);
        } else {
            $sum = $sum + $currentElement;
        }
    }
    return $sum;
}

$numbers = array(1, 2, 3, array(1, 2, 3, array(1, 2, 3)));
$result = Sum($numbers);
echo $result;

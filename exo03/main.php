<?php

function CanWrite($Magazine, $message)
{
    $occurences = array();
    for ($i = 0; $i < strlen($Magazine); $i++) {
        $currentLetter = $Magazine[$i];
        if (array_key_exists($currentLetter, $occurences)) {
            $occurences[$currentLetter] += 1;
        } else {
            $occurences[$currentLetter] = 1;
        }
    }
    for ($i = 0; $i < strlen($message); $i++) {
        $letter = $message[$i];
        if (!array_key_exists($letter, $occurences)) {
            return false;
        }
        if ($occurences[$letter] > 0) {
            --$occurences[$letter];
        } else {
            return false;
        }
    }
    return true;
}

if (CanWrite("aba", "aaa")) {
    echo "Vous pouvez ecrire votre lettre";
} else {
    echo "Vous ne pouvez pas ecrire votre lettre";
}
echo "\n--------------------------\n";
echo CanWrite("bonjour", "a"); // returns false 
echo "\n--------------------------\n";
echo CanWrite("bonjour, je suis content", "jour j"); // returns true
echo "\n--------------------------\n";

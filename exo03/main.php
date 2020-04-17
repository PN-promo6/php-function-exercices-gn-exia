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

//<?php

function TesterSiJePeuxEcrireAvec($magazine, $message)
{
    for ($i = 0; $i < strlen($message); $i++) {
        $lettreCouranteDuMessage = $message[$i];
        if ($lettreCouranteDuMessage == " ") {
            continue;
        }
        $lettrePresente = false;
        for ($j = 0; $j < strlen($magazine); $j++) {
            $lettreCouranteDuMagazine = $magazine[$j];
            if ($lettreCouranteDuMessage == $lettreCouranteDuMagazine) {
                $lettrePresente = true;
                $magazine[$j] = " ";
                break;
            }
        }
        if ($lettrePresente == false) {
            return false;
        }
    }
    return true;
}

$magazine = "bonjour aujourd'hui il fait beau";
$lettre = "content content";

if (TesterSiJePeuxEcrireAvec($magazine, $lettre)) {
    echo "tu peux l'ecrire";
} else {
    echo "tu peux pas l'ecrire";
}

<?php

function decodeDNA($gen1, $gen2)
{
    $adn = "";
    for ($i = 0; $i < strlen($gen1); $i++) {
        if ($gen1[$i] != $gen2[$i]) {
            $adn = $adn . "^";
        } else {
            $adn = $adn . " ";
        }
    }
    return $adn;
}

echo decodeDNA('abc', "aaa");

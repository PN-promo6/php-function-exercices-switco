<?php

function decodeDNA(string $gen1, string $gen2)
{

    $adn = "";

    for ($i = 0; $i < strlen($gen1); $i++) {
        if ($gen1[$i] != $gen2[$i]) {
            $adn = $adn . "^";
            // on peut aussi écrire $adn .= "^";
        } else {
            $adn = $adn . " ";
        }
    }
    return $adn;
}
echo decodeDNA('abc', 'aaagyt');

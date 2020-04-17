<!-- Solution alternative plus simple, par Eric -->
<?php

function TesterSiJePeuxEcrireAvec($magazine, $message)
{
    for ($i = 0; $i < strlen($message); $i++) {

        $lettreCouranteDuMessage = $message[$i];
        if ($lettreCouranteDuMessage == " ") {
            // Si tu rencontres un espace, passe au caractère suivant
            continue;
        }

        $lettrePresente = false;
        for ($j = 0; $j < strlen($magazine); $j++) {
            $lettreCouranteDuMagazine = $magazine[$j];
            if ($lettreCouranteDuMessage == $lettreCouranteDuMagazine) {
                $lettrePresente = true;
                $magazine[$j] = " ";
                break;
                // permet de sortir de ce if
            }
        }
        if ($lettrePresente == false) {
            return false;
        }
    }
    return true;
}

$magazine = "bonjour aujourd'hui il fait beau";
$lettre = "toupi";

if (TesterSiJePeuxEcrireAvec($magazine, $lettre)) {
    echo "Tu peux écrire la lettre !";
} else {
    echo "Tu ne peux pas écrire la lettre !";
}

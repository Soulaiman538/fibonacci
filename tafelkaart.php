
<?php

// Functie om een tafelkaart te maken
function tafelkaart($n) {

    // Buitenste loop voor de rijen
    for ($rij = 1; $rij <= $n; $rij++) {

        // Binnenste loop voor de kolommen
        for ($kolom = 1; $kolom <= $n; $kolom++) {

            // Vermenigvuldig rij met kolom
            $resultaat = $rij * $kolom;

            // Toon het resultaat met gelijke breedte
            echo str_pad($resultaat, 5, " ", STR_PAD_LEFT);
        }

        // Nieuwe regel na elke rij
        echo "\n";
    }
}

// Vraag de gebruiker om een getal
$n = (int) readline("Voer een getal in: ");

// Controleer de invoer
if ($n > 0) {
    tafelkaart($n);
} else {
    echo "Voer een positief getal in.";
}

?>

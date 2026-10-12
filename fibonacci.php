
<?php

// Functie om de Fibonacci-reeks te genereren
function fibonacci($n) {
    $getal1 = 1;
    $getal2 = 2;

    // Herhaal de loop n keer
    for ($i = 1; $i <= $n; $i++) {
        echo $getal1;

        // Komma toevoegen, behalve bij het laatste getal
        if ($i < $n) {
            echo ", ";
        }

        // Bereken het volgende getal
        $volgende = $getal1 + $getal2;
        $getal1 = $getal2;
        $getal2 = $volgende;
    }
}

// Vraag de gebruiker om een getal
$n = (int) readline("Voer een getal in: ");

// Controleer de invoer
if ($n > 0) {
    fibonacci($n);
} else {
    echo "Voer een positief getal in.";
}

?>

<?php

function genereerFibonaciStream($n) {
    $a = 1;
    $b = 2;

    for ($i = 0; $i < $n; $i++) {
        // Geef het huidige getal direct af en pauzeer de functie
        yield $a; 
        
        // Bereken het volgende getal voor de volgende ronde
        $volgend = $a + $b;
        $a = $b;
        $b = $volgend;
    }
}

foreach (genereerFibonaciStream(5) as $getal) {
    echo $getal . PHP_EOL;
}

?>
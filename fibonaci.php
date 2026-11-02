<?php
// heres the code for fibonacci
function genereerFibonaciStream($n) {
    $a = 1;
    $b = 2;

    for ($i = 0; $i < $n; $i++) {
        // gives the current number and pauzes the function
        yield $a; 
        
        // calculates the next number for the next round
        $volgend = $a + $b;
        $a = $b;
        $b = $volgend;
    }
}

foreach (genereerFibonaciStream(5) as $getal) {
    
echo "fibonacci:"; 
echo $getal . PHP_EOL;
}
?>


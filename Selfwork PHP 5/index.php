<?php

/*Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

*/

$num1 = rand(1, 100);
$num2 = rand(1, 100);
$num3 = rand(1, 100);
$num4 = rand(1, 100);
$num5 = rand(1, 100);

$dividendo = 0;
$divisore = 0;

$arrayNumbers = [$num1, $num2, $num3, $num4, $num5];

$indexArray = count($arrayNumbers) - 1;

echo "I numeri sono:\n";

for ($i = 0; $i <= $indexArray; $i++) {
    echo $arrayNumbers[$i] . " ";

    if ($arrayNumbers[$i] % 2 == 0) {
        $dividendo += $arrayNumbers[$i];
        $divisore++;
    }
}

if ($divisore != 0) {
    $risultato = $dividendo / $divisore;
    echo "\nLa media tra i numeri pari è di " . $risultato;
} else {
    echo "Non è stato possibile effettuare una media tra numeri pari.";
}



?>
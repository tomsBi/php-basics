<?php declare(strict_types=1);

//exercise 6
$start = 1;
$end = 11;
$count = 1;

while ($count <= 10) {
    foreach (range($start, $end) as $number) {
        if ($number % 3 === 0 && $number % 5 === 0) {
            echo "CozaLoza ";
        }
        elseif ($number % 3 === 0 && $number % 7 === 0) {
            echo "CozaWoza ";
        }
        elseif ($number % 5 === 0 && $number % 7 === 0) {
            echo "LozaWoza ";
        }
        elseif ($number % 3 === 0) {
            echo "Coza ";
        }
        elseif ($number % 5 === 0) {
            echo "Loza ";
        }
        elseif ($number % 7 === 0) {
            echo "Woza ";
        }
        else {
            echo $number . " ";
        }
    }
    echo PHP_EOL;
    $count++;
    $start+=11;
    $end+=11;
}
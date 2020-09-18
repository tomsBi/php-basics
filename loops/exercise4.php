<?php declare(strict_types=1);

$maxValue = (int)readline("Max value? ");

$start = 1;
$end = 20;
$number = 1;

while ($number < $maxValue) {
    foreach (range($start, $end) as $number) {
        if ($number % 3 === 0 && $number % 5 === 0 && $number <=$maxValue) {
            echo "FizzBuzz ";
        }
        elseif ($number % 3 === 0 && $number <=$maxValue) {
            echo "Fizz ";
        }
        elseif ($number % 5 === 0 && $number <=$maxValue) {
            echo "Buzz ";
        }
        elseif($number <= $maxValue) {
            echo $number . " ";
        }
    }
    echo PHP_EOL;
    $start+=20;
    $end+=20;
}
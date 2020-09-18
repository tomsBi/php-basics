<?php declare(strict_types=1);


$array1 = [];
$array2 = [];

for ($i = 0; $i < 10; $i++){
    $array1[] = mt_rand(1, 100);
}

$array2 = $array1;

array_splice($array1, -1, 1, -7);


echo "Array 1: ".implode(" ", $array1).PHP_EOL;
echo "Array 2: ".implode(" ", $array2).PHP_EOL;
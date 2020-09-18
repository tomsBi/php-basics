<?php declare(strict_types=1);

$desiredSum = (integer)readline('Enter desired sum: ');
$dice1roll = mt_rand(1, 6);
$dice2roll = mt_rand(1, 6);
$sum = $dice1roll + $dice2roll;
while ($desiredSum !== $sum) {
    $dice1roll = mt_rand(1, 6);
    $dice2roll = mt_rand(1, 6);
    $sum = $dice1roll + $dice2roll;
    echo $dice1roll . ' and ' . $dice2roll . ' = ' . $sum . PHP_EOL;
}





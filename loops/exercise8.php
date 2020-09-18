<?php declare(strict_types=1);

$min = (integer)readline('Min? ');
$max = (integer)readline('Max? ');


for ($i = $min; $i <= $max; $i++) {
    for ($j = $i; $j <= $max; $j++) {
        echo $j;
    }
    echo PHP_EOL;
}
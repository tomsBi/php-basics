<?php declare(strict_types=1);

$number = (int) readline("Enter number: ");
$power = (int) readline("Enter power: ");


function multiply($a, $b)
{
    if ($b == 0)
        return 1;
    $result = $a;
    $number = $a;
    for($i = 1; $i < $b; $i++)
    {
        for($j = 1; $j < $a; $j++)
        {
            $result = $result + $number;
        }
        $number = $result;
    }
    return $result;
}


echo multiply($number, $power);
echo PHP_EOL;

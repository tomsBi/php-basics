<?php declare(strict_types=1);


//Here are exercises 1,2,3,4,7
//exercise 1

function checkIntegers(int $x, int $y){
    if($x === 15 || $y === 15 || $x + $y === 15 || abs($x - $y) === 15){
        echo 'True' . PHP_EOL;
    } else {
        echo 'False' . PHP_EOL;
    }
}
checkIntegers(30,15);
checkIntegers(15,18);
checkIntegers(17,2);
checkIntegers(-14,1);
checkIntegers(4,13);


//exercise 2


function checkOddEven(int $n){
    if ($n % 2 == 0){
        echo 'Even number' . " " . 'bye!' . PHP_EOL;
    }else{
        echo 'Odd number' . " " . 'bye!' . PHP_EOL;
    }
}

checkOddEven(4);
checkOddEven(5);
checkOddEven(11);
checkOddEven(16);


//exercise 3

$values =[
    "min" => 1,
    "max" => 100
];

$sum = 0;
for ($i = $values["min"]; $i <= $values["max"]; $i++){
    $sum=$sum+$i;
}
echo "The sum ".$values["min"]." to ".$values["max"]." is ".$sum . PHP_EOL;
echo "The average is ". $sum/count(range($values["min"], $values["max"])) . PHP_EOL;

//exercise 4

$num = 10;
$factorial = 1;
for($z=$num; $z>=1; $z--){
    $factorial = $factorial*$z;
}
echo "Factorial of $num is $factorial".PHP_EOL;


//exercise 7


function x($t)
{
    $a = -9.81;
    $v = 0;
    $x = 0;
    echo 0.5 * $a * $t ** 2 + $v * $t + $x."m".PHP_EOL;
}
x(10);


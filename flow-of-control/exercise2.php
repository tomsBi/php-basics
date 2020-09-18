<?php declare(strict_types = 1);

$number = (int) readline("Enter number: ");


if($number > 0){
    echo $number ." is positive!".PHP_EOL;
} elseif ($number < 0){
    echo $number ." is negative!".PHP_EOL;
}elseif ($number = 0){
    echo $number. " is zero!".PHP_EOL;
}else{
    echo "Enter a number!".PHP_EOL;
}

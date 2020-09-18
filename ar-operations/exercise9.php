<?php declare(strict_types=1);


$weight = (int) readline("Enter your weight in kg: "). PHP_EOL;
$height = (float) readline("Enter your height in m: "). PHP_EOL;


$weightPounds = (float) $weight * 2.2046226218;
$heightInches = (float) $height * 3.28 * 12;



function bmi(float $w,float $h){

    return ((float)$w * 703) / ((float)$h ** 2);
}

echo "BMI = ".number_format(bmi($weightPounds, $heightInches), 1).PHP_EOL;

if(number_format(bmi($weightPounds, $heightInches), 1)>25){
    echo "You are overweight" .PHP_EOL;
} elseif(number_format(bmi($weightPounds, $heightInches), 1)<18.5){
    echo "You are underweight!".PHP_EOL;
}else{
    echo "You have optimal weight!".PHP_EOL;
}




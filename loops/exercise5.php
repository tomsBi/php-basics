<?php declare(strict_types=1);

echo "Welcome to Piglet!".PHP_EOL;

$usersInput = "y";


$dice = rand(1,6);
echo "You rolled a $dice" . "!" . PHP_EOL;
$points = $dice;
while($usersInput !== 'n') {
    $usersInput = (string)readline("Roll again? (y/n)");
    $dice = rand(1,6);
    if ($usersInput === 'y') {
        if ($dice === 1){
            echo "You rolled a " . $dice . "!" . PHP_EOL;
            echo "You got 0 points!" . PHP_EOL;
            break;
        }else{
            echo "You rolled a " . $dice . "!" . PHP_EOL;
        }
    } elseif ($usersInput === 'n') {
        echo "You got $points points!" . PHP_EOL;
    }
    $points += $dice;
}

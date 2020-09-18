<?php


$aiChoice = rand(1, 100);

$usersChoice = readline("I'm thinking of a number between 1-100. Try to guess it. "). PHP_EOL;
echo $usersChoice;

switch ($usersChoice){
    case($aiChoice === $usersChoice):
        echo 'You guessed it! What are the odds?!?'. PHP_EOL;
        break;
    case($usersChoice < $aiChoice):
        echo "Sorry, you are too low. I was thinking of $aiChoice". PHP_EOL;
        break;
    default:
        echo "Sorry, you are too high. I was thinking of $aiChoice". PHP_EOL;
}

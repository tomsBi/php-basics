<?php declare(strict_types=1);


$word = (string) readline("Enter your word: ");
$wordLower = strtolower($word);
$arr = str_split($wordLower);

foreach ($arr as $character){
    if($character === 'a'||$character ==='b' || $character ==='c'){
        echo 2;
    } elseif($character === 'd'||$character ==='e' || $character ==='f'){
        echo 3;
    } elseif($character === 'g'||$character ==='h' || $character ==='i'){
        echo 4;
    } elseif($character === 'j'||$character ==='k' || $character ==='l'){
        echo 5;
    } elseif($character === 'm'||$character ==='n' || $character ==='o'){
        echo 6;
    } elseif($character === 'p'||$character ==='q' || $character ==='r' || $character ==='s'){
        echo 7;
    } elseif($character=== 't'||$character ==='u' || $character ==='v'){
        echo 8;
    } elseif($character=== 'w'||$character ==='x' || $character ==='y' || $character==='z'){
        echo 9;
    }

}echo PHP_EOL;
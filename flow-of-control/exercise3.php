<?php declare(strict_types=1);


$num = (int) readline("Enter number: ");

if($num>0) {
    $numLength = (int)(log($num + 1, 10) + 1);
    echo "Length: $numLength"."!".PHP_EOL;
}else{
    echo "$num is negative!".PHP_EOL;
}

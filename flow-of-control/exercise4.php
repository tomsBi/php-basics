<?php declare(strict_types=1);


$dayNumber = (int) 0;
echo $dayNumber.PHP_EOL;


if($dayNumber===0){
    echo "It is Sunday";
}elseif ($dayNumber===1){
    echo "It is Monday";
}elseif ($dayNumber===2){
    echo "It is Tuesday";
}elseif ($dayNumber===3){
    echo "It is Wednesday";
}elseif ($dayNumber===4){
    echo "It is Thursday";
}elseif ($dayNumber===5){
    echo "It is Friday";
}elseif ($dayNumber===6){
    echo "It is Saturday";
}else{
    echo "Not a valid day";
}
echo PHP_EOL;


switch (true){
    case($dayNumber === 0):
        echo "It is Sunday";
        break;
    case($dayNumber === 1):
        echo "It is Monday";
        break;
    case($dayNumber === 2):
        echo "It is Tuesday";
        break;
    case($dayNumber === 3):
        echo "It is Wednesday";
        break;
    case($dayNumber === 4):
        echo "It is Thursday";
        break;
    case($dayNumber === 5):
        echo "It is Friday";
        break;
    case($dayNumber === 6):
        echo "It is Saturday";
        break;
    default:
        echo "Not a valid day";
}echo PHP_EOL;
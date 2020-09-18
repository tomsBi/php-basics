<?php declare(strict_types=1);

function areOfTheCircle(int$radius){
    return M_PI * $radius *2;
}


function areOfTheRectangle(int$length, int$width){
    return $length * $width;
}


function areOfTheTriangle(int$base, int$hei){
    return $base * $hei * 0.5;
}


echo "Geometry calculator:".PHP_EOL;
echo PHP_EOL;
echo $one = "1.Calculate the Area of a Circle".PHP_EOL;
echo $two = "2.Calculate the Area of a Rectangle".PHP_EOL;
echo $three = "3.Calculate the Area of a Triangle".PHP_EOL;
echo $four = "4.Quit".PHP_EOL;
$usersChoice = readline("Enter your choice (1-4): ").PHP_EOL;

if ($usersChoice == 1){
    $radius = (int) readline("Enter radius of a Circle: ").PHP_EOL;
    if($radius <= 0){
        echo "Error".PHP_EOL;
    }else{
        echo "Area of the Circle: ".number_format(areOfTheCircle((int)$radius), 1).PHP_EOL;
    }
}elseif($usersChoice == 2){
    $length = (int)readline("Enter length of a Rectangle: ").PHP_EOL;
    $width = (int)readline("Enter width of a Rectangle: ").PHP_EOL;
    if($length <= 0 || $width <= 0){
        echo "Error".PHP_EOL;
    }else{
        echo "Are of the Rectangle: ".areOfTheRectangle((int)$length, (int)$width).PHP_EOL;
    }
}elseif($usersChoice == 3){
    $base = (int)readline("Enter length of a Triangles base: ").PHP_EOL;
    $hei = (int)readline("Enter Triangles height: ").PHP_EOL;
    if ($base <= 0 || $hei <= 0){
        echo "Error".PHP_EOL;
    }else{
        echo "Are of the Triangle: ".areOfTheTriangle((int)$base, (int)$hei).PHP_EOL;
    }
}elseif ($usersChoice == 4){
    echo "Quit".PHP_EOL;

}else{
    echo "Error".PHP_EOL;
}




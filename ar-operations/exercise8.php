<?php


$employees =[
    'employee1' => [
        'Base pay' => 7.5,
        'Hours worked' => 35
    ],
    'employee2' =>[
        'Base pay' => 8.2,
        'Hours worked' => 47
    ],
    'employee3' => [
        'Base pay' => 10.0,
        'Hours worked' => 73
    ]
];

foreach ($employees as $employee) {
    if($employee['Base pay']>=8.0) {
        echo number_format($employee['Base pay'] * $employee['Hours worked'],1) . PHP_EOL;
    }else {
        echo 'Error'.PHP_EOL;
    }
    }


<?php

/* $cars = ['S10', 'Jeep Compass', 'Renegade', 'Jetta'];

var_dump($cars); */

/* $car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018
];
$car['airbag'] = true;

//echo $car['cor'];
//var_dump($car);

foreach($car as $c) {
    echo $c . '<br>';
} */

$cars = [
    'Mercedes' => [
        'color' => 'black',
        'motor' => 5.2,
        'year' => 2017
    ],
    'Ford' => [
        'color' => 'blue',
        'motor' => 3.2,
        'year' => 2019
    ],
    'Ferrari' => [
        'color' => 'red',
        'motor' => 5.2,
        'year' => 2020
    ]
];

//echo $cars['Ford']['color'];

/* foreach($cars as $car) {
    echo 'Color: ' . $car['color']  . ' '. 'Motor: '. $car['motor'] .' '. 'Year: '. $car['year'] . '<br>';
} */


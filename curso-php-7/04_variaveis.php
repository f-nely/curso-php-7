<?php

$name = 'Carlos Ferreira';
$x = 5;
$y = 10.5;
$z = true;
$cars = ['Volvo', 'BMW', 'Toyota'];
$employee_object = new Stdclass();
$employee_object->name = "John Doe";
$employee_object->position = "Software Engineer";
$employee_object->address = "53, nth street, city";
$employee_object->status = "Best";

echo $name . '<br>';

echo $x . '<br>';

echo $y . '<br>';

echo $z . '<br>';

var_dump($cars, $employee_object);
<?php

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

//echo end($ages); // retorna o último elemento do array

$agesFiltered = array_filter($ages, function ($age) {
    return $age >= 18;
});

var_dump($agesFiltered);
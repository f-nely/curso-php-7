<?php

function fatorial(int $number): int
{
    if ($number <= 1) 
        $number = $number;
    else 
        $number *= fatorial($number - 1);

    return $number;
}

echo fatorial(4);
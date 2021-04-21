<?php

function familyName(string $fname): string
{
    return "$fname Refsnes.<br>";
}

echo familyName('Jani');
echo familyName('Hege');
echo familyName('Stale');
echo familyName('Kali Jim');
echo familyName('Borge');

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}

//echo sum(8, 10);

function sumTwo(int $n1, int $n2, int $taxa = 2): int
{
    return ($n1 + $n2) * $taxa;
}

echo sumTwo(1, 2);
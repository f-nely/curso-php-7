<?php

$name = ' EspecializaTi ';

var_dump($name);
// ltrim - remove espaços no começo
var_dump(ltrim($name));
// rtrim - remove espaços no final
var_dump(rtrim($name));
// trim - remove espaço tanto no começo como no final
var_dump(trim($name));

/* w3schools example*/
$str = 'Hello World!';
echo $str . '<br>';
echo ltrim($str, 'Hello');
echo '<br>';
$str = '   Hello World!';
echo 'Without ltrim: ' . $str;
echo '<br>';
echo 'With ltrim: ' . ltrim($str);

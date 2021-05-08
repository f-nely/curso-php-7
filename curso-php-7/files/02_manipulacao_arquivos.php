<?php

$text = 'A year from now you may wish you had stated today';
generationLog($text);


function generationLog($text) 
{
    $file = fopen('projetoX.log', 'a+');
    fwrite($file, "$text \r\n");
    fclose($file);
}

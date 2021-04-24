<?php

$state = 'São Paulo/SP';
// explode - transforma string em um array
$arrayState = explode('/', $state);

var_dump($arrayState);

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);

foreach ($arrayInfo as $array) {
    echo $array . '<br>';
}

var_dump($arrayInfo);
// implode transforma um array em uma string
echo implode('- ', $arrayInfo);
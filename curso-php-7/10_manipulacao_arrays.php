<?php

$cart = [
     0 => 'Macarrão', 
     1 => 'Feijão', 
     2 => 'Arroz', 
     3 => 'Batata'
];

arsort($cart); // ordena em ordem decrescente
var_dump($cart);

asort($cart); // ordena em ordem crescente
var_dump($cart);

sort($cart);
var_dump($cart); // ordena tanto as chaves quato os valores


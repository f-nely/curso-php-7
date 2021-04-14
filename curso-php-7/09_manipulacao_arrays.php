<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Leite'];

var_dump($cart);

array_pop($cart); // remove o último elemento do array
var_dump($cart);

array_shift($cart); // remove o primeiro elemento
var_dump($cart);

unset($cart[0]); // remove o elemento na posição zero
var_dump($cart);

array_push($cart, 'Açúcar'); // adiciona elemento no final do array
array_push($cart, 'Café');
var_dump($cart);

array_unshift($cart, 'Suco'); // adiciona elemento no começo do array
array_unshift($cart, 'Açúcar');
var_dump($cart);

$cart = array_unique($cart); // remove elementos duplicados
var_dump($cart);







<?php


//var_dump($_FILES);
//var_dump($_FILES['imagem']);
//var_dump($_FILES['imagem']['name']);
//var_dump($_FILES['imagem']['type']);

/* $image = $_FILES['imagem'];

if (move_uploaded_file($image['tmp_name'], $image['name']))
    echo 'Sucesso!';
else 
    echo 'Something wrong? get help..'; */

$image = $_FILES['imagem'];
$path = 'uploads/imgs/';

if (move_uploaded_file($image['tmp_name'], $path . $image['name']))
    echo 'Sucesso!';
else 
    echo 'Something wrong? get help..';
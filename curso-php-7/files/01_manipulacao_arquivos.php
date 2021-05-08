<?php

$content = 'Something here!';
touch('test.txt');

if (file_exists('test.txt')) {
    //file_put_contents('test.txt', $content);

    echo file_get_contents('test.txt');
} else {
    echo 'File does not exist.';
}
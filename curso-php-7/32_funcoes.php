<?php

$password = '123456';
//$salt = '7dc10a72810ccb5e01bd9bb6833b2cee';
//$password = '123456' . $salt;

//echo md5($password);
//echo sha1($password);
//echo crypt($password, 'if there is no struggle, there is no progress');
//$passCr = base64_encode($password);
//echo $passCr;
//echo base64_decode($passCr);
//echo strlen(hash('sha512', $password));
//echo hash('sha512', $password);

function cryptC(string $value): string
{
    $hash = crypt($value, '7dc10a72810ccb5e01bd9bb6833b2cee');
    $hash = md5($value);
    $hash = sha1($hash);
    $hash = hash('sha512', $hash);

    return $hash;
}

echo cryptC($password);
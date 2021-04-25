<?php

$domain = 'https://www.especializati.com.br';

//echo str_replace('www.', 'https://www.', $domain);

/* $sentence = 'Japão melhor time do mundo';
echo str_replace('Japão', 'Brasil', $sentence); */

//echo substr($domain, 0, 4);
//echo substr($domain, -7);

$protocol = substr($domain, 0, 8);
if ($protocol === 'https://') {
    echo "É seguro! <br>";
} else {
    echo "Não é seguro! <br>";
}

var_dump(substr($domain, 12, -7));

echo strlen($domain);


   

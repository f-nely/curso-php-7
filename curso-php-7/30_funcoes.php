<?php

echo 'O ano atual: ' . date('Y') . '<br>';
echo 'O mês atual: ' . date('m') . '<br>';
echo 'O dia atual: ' . date('d') . '<br>';
echo 'A data atual: ' . date('Y/m/d') . '<br>';
echo 'Hora atual: ' . date('H') . '<br>';
echo 'Minuto atual: ' . date('i') . '<br>';
echo 'Segundo atual: ' . date('s') . '<br>';
echo 'Horário atual: ' . date('H:i:s') . '<br>';
date_default_timezone_set('America/New_York');
echo 'Timezone: ' . date_default_timezone_get() . '<br>';
echo date('Y:m:d h:i:s');


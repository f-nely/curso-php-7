<?php

setcookie('cookie_test', 'Teste Cookie');
// duração de 7 dias do cookie
setcookie('auth', 'OK', (time() + (7 * 24 * 60 * 60)));
//setcookie('auth', 'OK', time() + 15);

//echo $_COOKIE['cookie_test'];
<?php

//var_dump($_POST);
/* echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "E-mail: {$_POST['email']}";
echo '<hr>';
echo 'Concordou? ' . isset($_POST['concordo']) && isset($_POST['concordo']) != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descrição: {$_POST['descricao']}";
echo '<hr>'; */

echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "E-mail: {$_REQUEST['email']}";
echo '<hr>';
echo 'Concordou? ' . isset($_REQUEST['concordo']) && isset($_REQUEST['concordo']) != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descrição: {$_REQUEST['descricao']}";
echo '<hr>';

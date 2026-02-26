<?php
/*Esse arquivo é o index, ponto de entrada do sistema.
Ele é responsável por carregar as dependências e iniciar a aplicação.*/

require_once './Sistema/configuracao.php';
include_once 'Helpers.php';


$texto = '<h1>Este é um texto longo que será</h1> <p>resumido para demonstração</p> do funcionamento da função resumirTexto.';

echo saudacao();
echo '<br>';

echo resumirTexto($texto, 500, '...');


<?php
/*Esse arquivo é o index, ponto de entrada do sistema.
Ele é responsável por carregar as dependências e iniciar a aplicação.*/

require_once './Sistema/configuracao.php';
include_once 'Helpers.php';


$texto = 'Este é um texto longo que será resumido para demonstração do funcionamento da função resumirTexto.';

echo resumirTexto($texto, 10, '...');
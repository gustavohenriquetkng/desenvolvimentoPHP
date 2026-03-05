<?php
function localhost(): bool{

    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_DEFAULT); // Obtém o nome do servidor a partir da variável de ambiente SERVER_NAME e sanitiza a string para evitar possíveis ataques de injeção de código

    if($servidor== 'localhost'){
        return true;

    }
    return false;
}

function url (string $url): string{
    $servirdor = filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_DEFAULT); //Obtém o nome do servidor a partir da variável de ambiente SERVER_NAME e sanitiza a string para evitar possíveis ataques de injeção de código
    $ambente = ($servirdor == 'localhost'? URL_PRODUCAO : SITE_URL); // Verifica se o servidor é localhost e define a variável $ambente com a URL de produção ou a URL do site, dependendo do resultado da comparação
    return $ambente . $url; // Retorna a URL completa concatenando a variável $ambente com a string $url passada como argumento
}

<?php

function localhost(): bool{

    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_DEFAULT); // Obtém o nome do servidor a partir da variável de ambiente SERVER_NAME e sanitiza a string para evitar possíveis ataques de injeção de código

    if($servidor['HTTP_HOST'] == 'localhost'){
        return true;

    }
    return false;
}


/**
 * Summary of validarUrlcnf
 * @param string $url1 URL a ser validada 
 * @return bool retorna true se a URL for válida, caso contrário retorna false
 */
function validarUrlcnf( string $url1 ): bool {// função personalizada para validar URL, verificando se a URL tem pelo menos 10 caracteres, contém um ponto e começa com "http://" ou "https://"
    if(mb_strlen($url1) <10) {
        return false;
    }
    if(!str_contains($url1,'.')){
        return false;
    }
    if(str_contains($url1,'http://') or str_contains($url1,'https://')){
        return true;
    }
    return false;
    
}




/**
 * Summary of validarURL
 * @param string $url URL a ser validada
 * @return bool retorna true se a URL for válida, caso contrário retorna false
 */
function validarURL(string $url): bool{
    return filter_var($url, FILTER_VALIDATE_URL) !== false;

}



/**
 * Summary of validarEmail 
 * @param string $email email a ser validado
 * @return bool retorna true se o email for válido, caso contrário retorna false
 */
function validarEmail(string $email): bool{   

    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

}

function formatarNumero(float $numero): string {
    return number_format($numero, 2, ',', '.');
}




/**
 * Summary of formatarValor
 * @param float $valor
 * @return string
 */

function formatarValor(float $valor): string {
    return number_format(($valor?:10), 2, ',', '.');
    

}

/**
 * Summary of saudacao
 * @return string saudação apropriada com base na hora atual do dia
 */
function saudacao (): string{
    date_default_timezone_set('America/Sao_Paulo'); // fuso do Brasil

    $hora = date('H'); // obtém a hora atual no formato de 24 horas
    

    if ($hora >= 5 && $hora <= 12){

        $saudacao = 'Bom Dia';

    }elseif ($hora >= 13 && $hora <= 18){
        $saudacao = 'Boa Tarde';
        
    }elseif ($hora >= 19 && $hora <= 23){
            $saudacao = 'Boa Noite';}
    else{
            $saudacao = 'Boa madrugada';
    }
    return $saudacao;

}

/**
 * Summary of resumirTexto
 * @param string $texto texto a ser resumido
 * @param int $limite limite de caracteres para o resumo
 * @param string $continuacao texto a ser adicionado ao final do resumo, caso o texto original seja maior que o limite
 * @return string resumo do texto original, com a continuação caso necessário
 */
function resumirTexto( string $texto, int $limite, string $continuacao = '...'): string{

    $textoLimpo = trim(strip_tags($texto)); // remove tags HTML e espaços em branco do início e do fim do texto
    if (mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

   $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ' ')); // obtém uma substring do texto limpo, começando do início e terminando no último espaço antes do limite de caracteres
    
    return $resumirTexto . $continuacao;
}
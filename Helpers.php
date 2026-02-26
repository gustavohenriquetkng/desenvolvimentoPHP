<?php

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
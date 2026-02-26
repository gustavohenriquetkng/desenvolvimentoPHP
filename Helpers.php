<?php
/*function saudacao (): string{

    $hora = 9;
    

    if ($hora >= 0 && $hora <= 5){

        $saudacao = 'Boa Madrugada';

    }else {
        $saudacao = 'Boa Noite';'
    }
    return $saudacao;

}*/


function resumirTexto( string $texto, int $limite, string $continuacao = '...'): string{

    $textoLimpo = trim($texto);
    if (mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

   $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
    
    return $resumirTexto . $continuacao;
}
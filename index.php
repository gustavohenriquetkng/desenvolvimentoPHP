<?php
/*Esse arquivo é o index, ponto de entrada do sistema.
Ele é responsável por carregar as dependências e iniciar a aplicação.*/

require_once './Sistema/configuracao.php';
include_once 'Helpers.php';

echo formatarValor(0);  /*Chama a função formatarValor, passando o valor 123456.789 como argumento, e exibe o resultado formatado. */;
$Valor = '333';  //Variável $Valor recebe o valor '333'. 
echo '<br>';
$texto = '<h1>Este é um texto longo que será</h1> <p>resumido para demonstração</p> do funcionamento da função resumirTexto.';  /* Variável $texto recebe uma string HTML que contém um texto longo. */
echo '<br>';
echo saudacao();
echo '<br>';
echo resumirTexto($texto, 500, '...');
echo '<br>';
echo ($Valor ?: 'Valor não definido');  /*Função de operador ternário para verificar se a variável $Valor
 tem um valor definido. Se tiver, exibe o valor, caso contrário, exibe a mensagem "Valor não definido". */
Echo '<br>';
$numero1 = 0;  //Variável $numero recebe o valor 0.
$numero2 = 10; //Variável $numero recebe o valor 10.
$numero3 = 15; //Variável $numero recebe o valor 15.
echo formatarNumero($numero1);  /*Chama a função formatarValor, passando o valor da variável $numero como argumento, e exibe o resultado formatado. */
echo '<br>';
echo formatarNumero($numero2);  /*Chama a função formatarValor, passando o valor da variável $numero como argumento, e exibe o resultado formatado. */
echo '<br>';
echo formatarNumero($numero3);  /*Chama a função formatarValor, passando o valor da variável $numero como argumento, e exibe o resultado formatado. */
/*var_dump(validarEmail('gustavohrn8@gmail.com')); Chama a função validarEmail, passando a string 'teste' como argumento, e exibe o resultado usando var_dump para mostrar o tipo de retorno. */
echo '<br>';


/*var_dump(validarEmail('gustavohrn8@gmail.com')); Chama a função validarEmail, passando a string 'teste' como argumento, e exibe o resultado usando var_dump para mostrar o tipo de retorno. */
echo '<br>';
if(validarEmail('gustavohrn8@gmail.com')){  /* função que verifica o email adicionado retornando valor válido ou inválido */
    echo 'Email válido';
} else {
    echo 'Email inválido';
}
echo '<br>';

if(validarURL('https://github.com/gustavohenriquetkng/desenvolvimentoPHP')){  /* função que verifica a URL adicionada retornando valor válido ou inválido */
    echo 'URL válida';

}else{
    echo 'URL inválida';
}






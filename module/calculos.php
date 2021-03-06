<?php

/**
 * retorna a media dos numberos passados como parametro
 * 
 * @param array $numeros - array de numeros utilizados para o calculo da media
 * @return media
 */
function media(array $numeros)
{
    return array_sum($numeros) / count($numeros);
}

/**
 * Retorna o resultado de uma operação numerica entre os numeros passados como parametros
 * 
 * @param   double $num1    primeiro numero usado na expressão
 * @param   double $num2    segundo numero usado na expressão
 * @param   double $operacao    operação matematica a ser realizada
 * @return  double resultado
 */
function calc($num1, $num2, String $operacao)
{
    $resultado = 0;
    switch (strtoupper($operacao)) {
        case "SOMAR":
            $resultado = $num1 + $num2;
            break;
        case "SUBTRAIR":
            $resultado = $num1 - $num2;
            break;
        case "MULTIPLICAR":
            $resultado = $num1 * $num2;
            break;
        case "DIVIDIR":
            if ($num2 == 0) echo ERROR_MSG_INVALID_OPERATION;
            else $resultado = $num1 / $num2;
            break;
    }
    return $resultado;
}

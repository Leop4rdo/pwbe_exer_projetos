<?php

require_once "../module/config.php";
require_once "../module/validation.php";

// Declarando Variaveis:
$inicio = (int) -1;
$fim = (int) -1;
$totalPares = (int) 0;
$totalImpares = (int) 0;
$arrPares = (array) array();
$arrImpares = (array) array();


if (isset($_POST["btnCalc"])) {
    $inicio = $_POST["sltInicio"];
    $fim = $_POST["sltFim"];

    if ($_POST["sltInicio"] == "-1" || $_POST["sltFim"] == "-1") { // validação input vazio
        echo ERROR_MSG_BLANK_INPUT;
    } elseif ($inicio > $fim) { // validação contagem invalida
        echo ERROR_MSG_INICIO_MAIOR;
    } elseif ($inicio == $fim){
        echo ERROR_MSG_INICIO_IGUAL_FIM;
    } else {
        for ($i=$inicio; $i <= $fim; $i++) { 
            if ($i%2 == 0) 
                $arrPares[] = $i; // adicionando $i no final do array $arrPares
            else 
                $arrImpares[] = $i; // adicionando $i no final do array $arrImpares
        }
    }
}

/**
 * Gera as options de um select com apenas valores numericos entre os valores
 * passados como parametros.
 * 
 * @param int $inicio   primeiro valor
 * @param int $fim      ultimo valor
 * @param int $selectedValue    valor selecionado
 * @return string       html das options
 */
function gerarOptions(int $inicio, int $fim, $selectedValue){
    $options = (string) null;
    
    for ($i = $inicio; $i <= $fim; $i++) { 
        // <?= isOptionSelected($selectedValue, $i)
        $isSelected = isOptionSelected($selectedValue, $i);

        $options .= "<option value='$i' $isSelected >$i</option>";
    }

    return $options;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - Par Impar</title>

    <!-- LOADING CSS -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
    <nav>
        <div class='menu_container'>
            <div class='menu_icon'>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class='menu_items'>
                <li><a href='../index.html'>Home</a></li>
                <li><a href='./media.php'>Média</a></li>
                <li><a href='./calculadora.php'>Calculadora</a></li>
                <li><a href='./tabuada.php'>Tabuada</a></li>
                <li><a href='./par_impar.php'>Pares e Impares</a></li>
            </ul>
        </div>
    </nav>

    <div id="conteudo">
        <div id="titulo">Par e Impar</div>
        <form action="" method="POST" name="frmTabuada" id="form">
            <div class="input_container">
                <label>N° Inicial</label>
                <select name="sltInicio">
                    <option value="-1" <?= isOptionSelected($inicio, -1) ?>>Por Favor selecione um numero</option>
                    <?= gerarOptions(0, 500, $inicio) ?>
                </select>
            </div>
            <div class="input_container">
                <label>N° Final</label>
                <select name="sltFim" >
                    <option value="-1" <?= isOptionSelected($fim, -1) ?>>Por Favor selecione um numero</option>
                    <?= gerarOptions(100, 1000, $fim) ?>
                </select>
            </div>

            <input type="submit" value="Calcular" name="btnCalc" class="button_calcular">
        </form>

        <div class="result_container">
            <div>
                <span>Pares:</span>
                <div class="result_list" id="impar">
                    <?= implode("<br/>", $arrPares) ?>
                </div>
                <span>Qtde de Pares: <?= sizeof($arrPares) ?></span>
            </div>
            <div>
                <span>Impares:</span>
                <div class="result_list" id="par">
                    <?= implode("<br/>", $arrImpares) ?>
                </div>
                <span>Qtde de Impares: <?= sizeof($arrImpares) ?></span>
            </div>
        </div>
    </div>
</body>
</html>
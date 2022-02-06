<?php
// imports:
require_once "../module/config.php";
require_once "../module/calculos.php";

// Declaração de variaveis PHP:
// $nome = (tipo) valor;

// declarando variaveis:
$numeros = (array) array(0, 0, 0, 0); // iniciando valores para impedir erro de caixa vazia na primeira renderização
$resultado = (float) 0;

if (isset($_POST["btnCalc"])) { // verifica se o btnCalc foi pressionado
    $numeros[0] = $_POST["txtNota1"];
    $numeros[1] = $_POST["txtNota2"];
    $numeros[2] = $_POST["txtNota3"];
    $numeros[3] = $_POST["txtNota4"];


    if ($_POST["txtNota1"] == "" || $_POST["txtNota2"] == "" || $_POST["txtNota3"] == "" || $_POST["txtNota4"] == "") // tratamento de caixa vazia
        echo ERROR_MSG_BLANK_INPUT;
    else if (!is_numeric($numeros[0]) || !is_numeric($numeros[1]) || !is_numeric($numeros[2]) || !is_numeric($numeros[3])) // tratamento de caractere invalido
        echo ERROR_MSG_NOT_NUMERIC;
    else
        $resultado = media($numeros); // calculando media
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <meta charset="utf-8">

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
                <li><a href=''>Pares e Impares</a></li>
            </ul>
        </div>
    </nav>

    <div id="conteudo">
        <header id="titulo">
            Calculo de Médias
        </header>

        <div id="form">
            <form name="frmMedia" method="post" action="./media.php">
                <div>
                    <label>Nota 1:</label>
                    <input type="text" name="txtNota1" value="<?= $numeros[0] ?>">
                </div>

                <div>
                    <label>Nota 2:</label>
                    <input type="text" name="txtNota2" value="<?= $numeros[1] ?>">
                </div>

                <div>
                    <label>Nota 3:</label>
                    <input type="text" name="txtNota3" value="<?= $numeros[2] ?>">
                </div>

                <div>
                    <label>Nota 4:</label>
                    <input type="text" name="txtNota4" value="<?= $numeros[3] ?>">
                </div>
                <div>
                    <input type="submit" name="btnCalc" value="Calcular" class="button_calcular">
                    <div id="botaoReset">
                        <a href="media.php">
                            Novo Cálculo
                        </a>
                    </div>
                </div>
            </form>

        </div>
        <footer id="resultado">
            A média é: <?= $resultado ?>
        </footer>
    </div>
</body>

</html>
<?php
require_once "../module/config.php";
require_once "../module/calculos.php";

$tabuada = (double) 0;
$maxMultiplicador = (double) 0;
$txtResultado = (string) null;

if (isset($_POST['btnCalc'])) {
    $tabuada = $_POST['txtTabuada'];
    $maxMultiplicador = $_POST['txtMaxMultiplicador'];
    $txtResultado = "";

    if ($tabuada == "" || $maxMultiplicador == "") {
        echo ERROR_MSG_BLANK_INPUT;
    } elseif (!is_numeric($tabuada) || !is_numeric($maxMultiplicador)) {
        echo ERROR_MSG_NOT_NUMERIC;
    } elseif ($tabuada == 0) {
        echo ERROR_MSG_TABUADA_ZERO;
    } elseif ($maxMultiplicador <= 0) {
        echo ERROR_MSG_MULTIPLICADOR;
    } else {
        for ($i = 0; $i <= $maxMultiplicador; $i++) {
            $produto = calc($tabuada, $i, "MULTIPLICAR");
            $txtResultado .= "$tabuada x $i = $produto <br/>";
        }
    }
}



?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercicio - tabuada</title>

    <!-- Loading CSS -->
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/menu.css" />
    <link rel="stylesheet" href="../css/form.css" />
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
        <div id="titulo">Tabuada</div>
        <form action="" method="POST" name="frmTabuada" id="form">
            <div class="input_container">
                <label>Tabuada : </label>
                <input type="text" name="txtTabuada" value=<?= $tabuada ?>>
            </div>
            <div class="input_container">
                <label>Maximo Multiplicador : </label>
                <input type="text" name="txtMaxMultiplicador" value=<?= $maxMultiplicador ?>>
            </div>

            <input type="submit" value="Calcular" name="btnCalc" class="button_calcular">
        </form>

        <div class="result_list">
            <?= $txtResultado ?>
        </div>
    </div>
</body>

</html>
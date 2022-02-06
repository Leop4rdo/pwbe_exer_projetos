<?php
// importações: 
require_once "../module/config.php";
require_once "../module/calculos.php";
require_once "../module/validation.php";

// require_once(<file_path>) -> realiza um tratamento não permitindo que o arquivo seja importado mais de uma vez.

// Declarando Variaveis:
$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;
$opcao = (string) null;

// codigo realizado ao click do btnCalc:
if (isset($_POST["btnCalc"])) {
	// recebendo dados do formulario:
	$valor1 = $_POST['txtNum1'];
	$valor2 = $_POST['txtNum2'];

	// strtoupper($string) -> transforma o valor $string em uma string com todas as letras maiusculas
	// strtolower($string) -> transforma o valor $string em uma string com todas as letras minusculas

	if ($valor1 == "" || $valor2 == "") { // validação de caixa vazia
		echo ERROR_MSG_BLANK_INPUT;
	} elseif (!isset($_POST['rdoCalc'])) { // validação de rdo sem escolha
		echo ERROR_MSG_OPERATION_NOT_SELECTED;
	} elseif (!is_numeric($valor1) || !is_numeric($valor2)) { // validação de caracteres não numericos
		echo ERROR_MSG_NOT_NUMERIC;
	} else {
		$opcao = strtoupper($_POST['rdoCalc']);

		$resultado = calc($valor1, $valor2, $opcao);
	}
}
?>
<html>

<head>
	<title>Calculadora - Simples</title>

	<!-- LOADING CSS -->
	<link rel="stylesheet" href="../css/global.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/form.css">
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
		<div id="titulo">
			Calculadora Simples
		</div>
		<div id="form">
			<form name="frmcalculadora" method="POST" action="">
				Valor 1:<input type="text" name="txtNum1" value=<?= $valor1; ?>> <br>
				Valor 2:<input type="text" name="txtNum2" value=<?= $valor2; ?>> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdoCalc" value="somar" <?= isRadioChecked($opcao, "somar") ?> />Somar <br>
					<input type="radio" name="rdoCalc" value="subtrair" <?= isRadioChecked($opcao, "subtrair") ?> />Subtrair <br>
					<input type="radio" name="rdoCalc" value="multiplicar" <?= isRadioChecked($opcao, "multiplicar") ?> />Multiplicar <br>
					<input type="radio" name="rdoCalc" value="dividir" <?= isRadioChecked($opcao, "dividir") ?> />Dividir <br>
					<input type="submit" name="btnCalc" value="Calcular" class="button_calcular" />
				</div>
				<div id="resultado">
					<?= $resultado; ?>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
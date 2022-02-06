<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercicio - projetos pwbe</title>

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
                <li><a href=''>Pares e Impares</a></li>
            </ul>
        </div>
    </nav>

    <div id="conteudo">
        <div id="titulo">Tabuada</div>
        <form action="" method="$_POST" name="frmTabuada" id="form">
            <div>
                <label>Tabuada : </label>
                <input type="text" name="txtTabuada" value="1">
            </div>
            <div>
                <label>Maximo Multiplicador : </label>
                <input type="text" name="txtMaxMultiplicador" value="10">
            </div>

            <input type="submit" value="Calcular" class="button_calcular">
        </form>

        <div class="tabuada">

        </div>
    </div>
</body>

</html>
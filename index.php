<?php
// imports:
require_once "./components/menu.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercicio - projetos pwbe</title>

    <!-- Loading CSS -->
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/menu.css" />
    <link rel="stylesheet" href="./css/home.css" />
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
                <li><a href='./index.php'>Home</a></li>
                <li><a href='./pages/media.php'>Média</a></li>
                <li><a href=''>Calculadora</a></li>
                <li><a href=''>Tabuada</a></li>
                <li><a href=''>Pares e Impares</a></li>
            </ul>
        </div>
    </nav>

    <div class="home">
        <h1>Projetos PHP</h1>
        <ul>
            <li><a href="./pages/media.php">Média</a></li>
            <li><a href="">Calculadora</a></li>
            <li><a href="">Tabuada</a></li>
            <li><a href="">Pares e Impares</a></li>
        </ul>
    </div>
</body>

</html>
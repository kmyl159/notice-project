<?php require_once 'classes/noticia.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noticias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <a href="index.php"> logo</a>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="cadastrar-noticia.php">cadastrar noticia</a></li>
                </ul>
                <form action="index.php" method="GET" class="menu-nav-buscar">
                    <input type="text" name="filtrar" id="buscar">
                    <input type="submit" value="buscar" id="lupa">
                </form>
            </nav>
        </div>
    </header>
    <section>  

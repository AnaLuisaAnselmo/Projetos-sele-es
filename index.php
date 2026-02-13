<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classificacao.css">
    <link rel="stylesheet" href="css/jogo.css">
    <title>Página Inicial</title>
</head>
<body>
    <div class= "nav">
    <form method="GET">
     <input type="submit" name="pagina" value="classificacao">

     <input type="submit" name="pagina" value="grupo">

     <input type="submit" name= "pagina" value="jogo">

     <input type="submit" name="pagina" value="resultado">

     <input type="submit" name="pagina" value="selecao">

     <input type="submit" name="pagina" value="usuario">


    </form></div>
</body>
</html>

<?php

$pagina = $_GET['pagina'] ?? 'resultado';
$acao = $_GET['acao'] ?? 'index';

$controllerName = ucfirst($pagina) . "Controller";

require "MVC/Controller/$controllerName.php";

$controller = new $controllerName();
$controller->$acao();

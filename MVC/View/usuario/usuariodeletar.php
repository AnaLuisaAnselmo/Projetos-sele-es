<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/UsuarioController.php";

$controller = new UsuarioController();

if(isset($_GET['id'])){
    $controller->usuariodeletar($_GET['id']);
}

header('Location: ../../index.php');
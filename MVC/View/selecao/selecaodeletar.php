<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/SelecaoController.php";

$controller = new SelecaoController();

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $controller->selecaodeletar($id);
}

header('Location: ../../index.php');
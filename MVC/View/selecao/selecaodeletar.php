<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/SelecaoController.php";

$SelecaoGrupoController = new SelecaoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $selecao = $SelecaoGrupoController->selecaodeletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>
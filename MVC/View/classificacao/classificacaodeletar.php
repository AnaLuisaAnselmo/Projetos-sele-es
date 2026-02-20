<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/ClassificacaoController.php";

$ClassificacaoController = new ClassificacaoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $classificaco = $ClassificacaoController->classificacaodeletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>
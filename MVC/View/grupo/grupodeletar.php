<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/GrupoController.php";

$GrupoController = new GrupoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $grupo = $GrupoController->grupodeletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>
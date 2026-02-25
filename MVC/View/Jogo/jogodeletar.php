<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/JogoController.php";

$JogoGrupoController = new JogoController($pdo);

if(isset($_GET[':id'])){

    $id = $_GET[':id'];
    $jogo = $JogoGrupoController->jogodeletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>
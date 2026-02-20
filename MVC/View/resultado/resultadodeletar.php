<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/ResultadoController.php";

$ResultadoController = new ResultadoController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $resultado = $ResultadoControllerController->resultadodeletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>
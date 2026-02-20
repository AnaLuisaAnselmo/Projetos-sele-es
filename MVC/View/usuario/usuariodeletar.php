<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/UsuarioController.php";

$UsuarioGrupoController = new UsuarioController($pdo);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $usuario = $UsuarioGrupoController->usuariodeletar($id);
    header('Location: ../../index.php');
}else{
    header('Location: ../../index.php');
}

?>
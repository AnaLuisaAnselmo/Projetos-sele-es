<?php
require_once "MVC/Model/GrupoModel.php";

class GrupoController {

    public function index() {
        $model = new GrupoModel();
        $dados = $model->listar();
        require "MVC/View/grupo.php";
    }

    public function inserir() {
        $model = new GrupoModel();
        $model->inserir($_POST['nome']);
        header("Location: index.php?pagina=grupo");
    }
}


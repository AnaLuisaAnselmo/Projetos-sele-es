<?php
require_once "MVC/Model/ClassificacaoModel.php";

class ClassificacaoController {

    public function index() {
        $model = new ClassificacaoModel();
        $dados = $model->listar();
        require "MVC/View/classificacao.php";
    }
}


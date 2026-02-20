<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/ClassificacaoModel.php";

class ClassificacaoController {

    public function index() {
        $model = new ClassificacaoModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/classificacao/classificacao.php";
    }

}

?>
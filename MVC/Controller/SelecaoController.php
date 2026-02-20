<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/SelecaoModel.php";

class SelecaoController {

    public function index() {
        $model = new SelecaoModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/selecao/selecao.php";
    }

    public function inserir() {
        $model = new SelecaoModel();
        $model->inserir(
            $_POST['nome'],
            $_POST['continente'],
            $_POST['grupo_id']
        );

        header("Location: index.php?pagina=selecao");
    }
}

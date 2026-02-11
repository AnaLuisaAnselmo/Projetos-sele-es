<?php
require_once "MVC/Model/SelecaoModel.php";

class SelecaoController {

    public function index() {
        $model = new SelecaoModel();
        $dados = $model->listar();
        require "MVC/View/selecao.php";
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

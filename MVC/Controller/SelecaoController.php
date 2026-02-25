<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/SelecaoModel.php";

class SelecaoController {

    private $model;

    public function __construct() {
        $this->model = new SelecaoModel();
    }

    public function index() {
        $dados = $this->model->selecaolistar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/selecao/selecao.php";
    }

    public function inserir() {

        $this->model->inserir(
            $_POST['nome'],
            $_POST['continente'],
            $_POST['grupo_id']
        );

        header("Location: index.php?pagina=selecao");
    }

     public function excluir()
{
    $this->model->selecaodeletar($_GET['id']);

    header("Location: index.php?pagina=selecao");
}
}

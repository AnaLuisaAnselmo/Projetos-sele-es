<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/JogoModel.php";

class JogoController {

    private $model;


    public function __construct() {
        $this->model = new JogoModel();
    }

    public function index() {
        $model = new JogoModel();
        $dados = $model->listarjogos();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/Jogo/jogo.php";
    }

    public function jogoeditar() {

        $this->model->editar(
            $_POST['id'],
            $_POST['mandante'],
            $_POST['visitante'],
            $_POST['gols_mandante'],
            $_POST['gols_visitante'],
            $_POST['estadio'],
            $_POST['data_jogo'],
            $_POST['grupo']
        );

        header("Location: index.php?pagina=jogo");
    }

    public function jogodeletar() {

    $id = $_GET['id'];

    $model = new JogoModel();
    $model->jogodeletar($id);

    header("Location: index.php?pagina=jogo");
}

    public function jogo() {
        $model = new GrupoModel();
        $model->inserir($_POST['nome']);
        header("Location: index.php?pagina=jogo");
    }
}

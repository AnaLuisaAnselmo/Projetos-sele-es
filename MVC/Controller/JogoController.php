<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/JogoModel.php";

class JogoController
{

    private $model;


    public function __construct() {
        $this->model = new JogoModel();
    }

    public function index() {
        $model = new JogoModel();
        $dados = $model->listarjogos();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/Jogo/jogo.php";
    }



    public function inserir()
    {
        $model = new JogoModel();
        $model->inserir(

            $_POST['mandante'],
            $_POST['visitante'],
            $_POST['gols_mandante'],
            $_POST['gols_visitante'],
            $_POST['estadio'],
            $_POST['data_jogo'],
            $_POST['grupo'],
        );

        header("Location: index.php?pagina=jogo");
    }

    public function editar()
{
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("Location: index.php?pagina=jogo");
        exit;
    }

    $id = $_POST["id"];
    $mandante = $_POST["mandante"];
    $visitante = $_POST["visitante"];
    $gols_mandante = $_POST['gols_mandante'];
    $gols_visitante = $_POST['gols_visitante'];
    $estadio = $_POST['estadio'];
    $data_jogo = $_POST['data_jogo'];
    $grupo = $_POST['grupo'];

    $model = new JogoModel();
    $model->editar(
        $id,
        $mandante,
        $visitante,
        $gols_mandante,
        $gols_visitante,
        $estadio,
        $data_jogo,
        $grupo
    );

    header("Location: index.php?pagina=jogo");
}



    public function listar()
    {
        $model = new JogoModel();
        return $model->listar();
    }

    public function mostrareditar()
    {
        $model = new JogoModel();
        $dados = $model->listarjogo();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/jogo/jogoeditar.php";
    }

    public function jogodeletar($id)
    {

        $this->model->deletar($id);

        header("Location: index.php?pagina=jogo");
    }

    public function jogo() {
        $model = new GrupoModel();
        $model->inserir($_POST['nome']);
        header("Location: index.php?pagina=jogo");
    }
}

<?php
require_once "MVC/Model/ResultadoModel.php";

class ResultadoController{
private $model;

public function __construct() {
      $this->model = new ResultadoModel();


    }
 public function index()
{
    $dados = $this->model->listarresultado();

    $jogos = Database::connect()
        ->query("SELECT * FROM jogos")
        ->fetchAll();

    require "MVC/View/resultado/resultado.php";
}

    public function inserir()
    {
        $model = new ResultadoModel();
        $model->inserir(
            $_POST['jogo_id'],
            $_POST['gols_mandante'],
            $_POST['gols_visitante']
        );

        header("Location: index.php?pagina=resultado");
    }

    public function listar()
    {
        $model = new ResultadoModel();
        return $model->listar();
    }

    public function mostrareditar()
    {
        $model = new ResultadoModel();
        $dados = $model->listarresultado();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/resultado/resutadoeditar.php";
    }



    public function excluir()
{
    $this->model->resultadodeletar($_GET['id']);

    header("Location: index.php?pagina=resultado");
}

}

<?php
require_once "MVC/Model/ResultadoModel.php";

class ResultadoController
{

    public function index()
    {
        $model = new ResultadoModel();
        $dados = $model->listar();
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

    public function editar()
    {
        $jogo_id = $_POST['jogo_id'];
        $gols_mandante = $_POST['gols_mandante'];
        $gols_visitante = $_POST['gols_visitante'];
        $model = new ResultadoModel();
        $model->editar(
            $jogo_id,
            $gols_mandante,
            $gols_visitante
        );

        header("Location: index.php?pagina=resultado");
    }

}

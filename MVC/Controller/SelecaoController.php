<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/SelecaoModel.php";

class SelecaoController {

    private $model;

    public function __construct() {
        $this->model = new SelecaoModel();
    }

    public function index() {

        $model = new SelecaoModel();
        $dados = $this->model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/selecao/selecao.php";
    }

    public function inserir() {

       $model = new SelecaoModel();
        $this->model->inserir(

            $_POST['nome'],
            $_POST['continente'],
            $_POST['grupo_id']
        );

        header("Location: index.php?pagina=selecao");
    }

    public function mostrareditar() {
        
       $id = $_GET["id"];
       $model = new SelecaoModel();
       $dados = $this->model->listarselecao($id);
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/selecao/selecaoeditar.php";
    }

    public function listar () 
    {
        $model = new SelecaoModel();
        return $model->listar();
    }

    public function editar()
    {
         if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("Location: index.php?pagina=selecao");
        exit;
        }
      


        
            $id = $_GET["id"];
            $nome = $_POST["nome"];
            $continete = $_POST["continente"];
            $grupo_id = $_POST["grupo_id"];

            $model = new SelecaoModel();
            $model->editar(
                $id,
                $nome,
                $continete,
                $grupo_id
            );

            header("Location: index.php?pagina=selecao");
        
    }

    public function selecaodeletar($id) {

        $this->model->deletar($id);
    }
}

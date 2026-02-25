<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/GrupoModel.php";

class GrupoController {

 private $model;

    public function __construct() {
        $this->model = new GrupoModel();
    }

    public function index() {
        $model = new GrupoModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/grupo/grupo.php";
    }

    public function mostrareditar()
    {
       $id = $_GET["id"];
       $model = new GrupoModel();
       $dados = $model->listargrupo($id);
       require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/grupo/grupoeditar.php";
    }
    
    public function listar()
    {
        $model = new GrupoModel();
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

        $model = new GrupoModel();
        $model->editar(
            $id,
             $nome,
             );

        header("Location: index.php?pagina=grupo");     
    }
    
public function excluir()
{
    if(isset($_GET['id'])){

        $model = new GrupoModel();
        $model->grupodeletar($_GET['id']);
    }

    header("Location: index.php?pagina=grupo");
}

    public function inserir()
{
    $model = new GrupoModel();
    $this->model->inserir(
        $_POST["nome"]
        );

    header("Location: index.php?pagina=grupo");
}
}

?>
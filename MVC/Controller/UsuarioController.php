<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/UsuarioModel.php";

class UsuarioController {

    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }


    public function index() {

        $model = new UsuarioModel();
        $dados = $this->model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuario.php";
    }


    public function inserir() {

        $model = new UsuarioModel();
        $this->model->inserir(

            $_POST['nome'],
            $_POST['idade'],
            $_POST['cargo'],
            $_POST['selecao_id']
        );

        header("Location: index.php?pagina=usuario");
    }

     public function mostrareditar()
    {
        $id = $_GET["id"];
        $model = new UsuarioModel();
        $dados = $model->listarusuario($id);
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuarioeditar.php";
    }
    public function listar()
    {
        $model = new UsuarioModel();
        return $model->listar();
    }

    public function editar()
    {
 
     if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("Location: index.php?pagina=usuario");
        exit;
        }

    {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cargo = $_POST['cargo'];
        $selecao_id = $_POST['selecao_id'];

        $model = new UsuarioModel();
        $model->editar(
            $nome,
            $idade,
            $cargo,
            $selecao_id,
        );

        header("Location: index.php?pagina=usuario");
    }
}


  public function excluir()
{
    $this->model->deletar($_GET['id']);
    header("Location: index.php?pagina=usuario");
}
    }

<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/UsuarioModel.php";

class UsuarioController {

    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }


    public function index() {
        $dados = $this->model->listarusuarios();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuario.php";
    }


    public function inserir() {

        $this->model->inserir(
            $_POST['nome'],
            $_POST['idade'],
            $_POST['cargo'],
            $_POST['selecao_id']
        );

        header("Location: index.php?pagina=usuario");
    }



  public function excluir()
{
    $this->model->deletar($_GET['id']);
    header("Location: index.php?pagina=usuario");
}

}
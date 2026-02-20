<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/UsuarioModel.php";

class UsuarioController {

    private $model;

    public function __construct() {
        $this->model = new UsuarioModel();
    }

    // LISTAR
    public function index() {
        $dados = $this->model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuario.php";
    }

    // INSERIR
    public function inserir() {

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
        $model = new UsuarioModel();
        $dados = $model->listarusuario();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuarioeditar.php";
    }
    public function listar()
    {
        $model = new ResultadoModel();
        return $model->listar();
    }

    public function editar()
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

        header("Location: index.php?pagina=resultado");
    }

}

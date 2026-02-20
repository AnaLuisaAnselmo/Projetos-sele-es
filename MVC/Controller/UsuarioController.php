<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/UsuarioModel.php";

class UsuarioController {

    public function index() {
        $model = new UsuarioModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuario.php";
    }

    public function inserir() {
        $model = new UsuarioModel();
        $model->inserir(
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

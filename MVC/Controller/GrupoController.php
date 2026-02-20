<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/GrupoModel.php";

class GrupoController {

    public function index() {
        $model = new GrupoModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/usuario/usuario.php";
    }

    public function inserir() {
        $model = new GrupoModel();
        $model->inserir($_POST['nome']);
        header("Location: index.php?pagina=grupo");
    }

    public function excluir() {
        $model = new GrupoModel();
        $model->excluir($_GET['id']);
        header("Location: index.php?pagina=grupo");
    }

    public function editar() {
        $model = new GrupoModel();

        if ($_POST) {
            $model->atualizar($_POST['id'], $_POST['nome']);
            header("Location: index.php?pagina=grupo");
        } else {
            $dados = $model->buscarPorId($_GET['id']);
            require "MVC/View/grupo_editar.php";
        }
    }
}


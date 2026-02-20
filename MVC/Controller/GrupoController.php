<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/GrupoModel.php";

class GrupoController {

    public function index() {
        $model = new GrupoModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/grupo/grupo.php";
    }

    public function grupo() {
        $model = new GrupoModel();
        $model->inserir($_POST['nome']);
        header("Location: index.php?pagina=grupo");
    }

    public function grupodeletar() {
        $model = new GrupoModel();
        $model->excluir($_GET['id']);
        header("Location: index.php?pagina=grupo");
    }

    public function grupoeditar() {
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

?>
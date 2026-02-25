<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/GrupoModel.php";

class GrupoController {

 private $model;

    public function __construct() {
        $this->model = new GrupoModel();
    }

    public function index() {
        $model = new GrupoModel();
        $dados = $model->listargrupo();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/grupo/grupo.php";
    }

    public function grupo() {
        $model = new GrupoModel();
        $model->inserir($_POST['nome']);
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
    public function inserir()
{
    $model = new GrupoModel();
    $model->inserir($_POST['nome']);

    header("Location: index.php?pagina=grupo");
}
}

?>
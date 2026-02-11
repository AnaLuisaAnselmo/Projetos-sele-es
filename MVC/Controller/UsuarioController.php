<?php
require_once "MVC/Model/UsuarioModel.php";

class UsuarioController {

    public function index() {
        $model = new UsuarioModel();
        $dados = $model->listar();
        require "MVC/View/usuario.php";
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
}

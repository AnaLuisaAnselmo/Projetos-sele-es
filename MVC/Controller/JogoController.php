<?php
require_once "MVC/Model/JogoModel.php";

class JogoController {

    public function index() {
        $model = new JogoModel();
        $dados = $model->listar();
        require "MVC/View/jogo.php";
    }

    public function inserir() {
        $model = new JogoModel();
        $model->inserir(
            $_POST['mandante_id'],
            $_POST['visitante_id'],
            $_POST['data_jogo'],
            $_POST['estadio']
        );

        header("Location: index.php?pagina=jogo");
    }
}

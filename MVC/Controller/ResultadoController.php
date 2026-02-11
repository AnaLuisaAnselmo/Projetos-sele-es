<?php
require_once "MVC/Model/ResultadoModel.php";

class ResultadoController {

    public function index() {
        require "MVC/View/resultado.php";
    }

    public function inserir() {
        $model = new ResultadoModel();
        $model->inserir(
            $_POST['jogo_id'],
            $_POST['gols_mandante'],
            $_POST['gols_visitante']
        );

        header("Location: index.php?pagina=resultado");
    }
}

<?php
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Model/JogoModel.php";

class JogoController {

    public function index() {
        $model = new JogoModel();
        $dados = $model->listar();
        require "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/View/Jogo/jogo.php";
    }

    public function inserir() {
        $model = new JogoModel();
        $model->inserir(
            $_POST['mandante'],
            $_POST['visitante'],
            $_POST['gols_mandante'],
            $_POST['gols_visitante'],
            $_POST['estadio'],
            $_POST['data_jogo'], 
            $_POST['grupo']  
            
        );

        header("Location: index.php?pagina=jogo");
    }
}

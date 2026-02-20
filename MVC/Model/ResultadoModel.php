<?php
require_once "Config/Database.php";
require_once "MVC/Model/ClassificacaoModel.php";

class ResultadoModel
{

    public function inserir($jogo, $gm, $gv)
    {

        $conn = Database::connect();

        $stmt = $conn->prepare("INSERT INTO resultados (jogo_id, gols_mandante, gols_visitante) VALUES (?, ?, ?)");

        $stmt->execute([$jogo, $gm, $gv]);



        $jogoInfo = $conn->query("SELECT * FROM jogos WHERE id=$jogo")
            ->fetch();


        $classificacao = new ClassificacaoModel();
        $classificacao->atualizar($jogoInfo['mandante'], $gm, $gv);
        $classificacao->atualizar($jogoInfo['visitante'], $gv, $gm);
    }

    public function listar()
    {
        return Database::connect()
            ->query("select*from resultados ")
            ->fetchAll();

    }

    public function listarresultado()
    {
        $id = $_GET['id'];
        return Database::connect()
            ->query("select * from resultados where id = $id")
            ->fetch();
    }

    public function editar($jogo_id, $gols_mandante, $gols_visitante)
    {

       $conn = Database::connect();

        $stmt = $conn->prepare("UPDATE resultados 
            SET jogo_id = ?, 
                gols_mandante = ?, 
                gols_visitante = ?
            WHERE id = ?");

        $stmt->execute([$jogo_id, $gols_mandante, $gols_visitante,$_GET["id"]]);
    }

}

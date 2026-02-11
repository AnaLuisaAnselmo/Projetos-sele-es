<?php
require_once "Config/Database.php";
require_once "MVC/Model/ClassificacaoModel.php";

class ResultadoModel {

    public function inserir($jogo, $gm, $gv) {

     $conn = Database::connect();

        $stmt = $conn->prepare("INSERT INTO resultados (jogo_id, gols_mandante, gols_visitante) VALUES (?, ?, ?)");
           
        $stmt->execute([$jogo, $gm, $gv]);

         //$id = $conn->lastInsertId(); // agora pega o ID correto

        $jogoInfo = $conn->query("SELECT * FROM jogos WHERE id=$jogo")
            ->fetch();

            //var_dump($jogoInfo);
           // die();
        $classificacao = new ClassificacaoModel();
        $classificacao->atualizar($jogoInfo['mandante'], $gm, $gv);
        $classificacao->atualizar($jogoInfo['visitante'], $gv, $gm);
    }

    public function listar(){
        return Database::connect()
            ->query("select*from resultados ")
            ->fetchAll();
           
    }
}

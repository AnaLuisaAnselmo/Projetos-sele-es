<?php
require_once "Config/Database.php";
require_once "MVC/Model/ClassificacaoModel.php";

class ResultadoModel {

    public function inserir($jogo, $gm, $gv) {

        Database::connect()
            ->prepare("INSERT INTO resultados (jogo_id, gols_mandante, gols_visitante) VALUES (?, ?, ?)")
            ->execute([$jogo, $gm, $gv]);

        $jogoInfo = Database::connect()
            ->query("SELECT * FROM jogos WHERE id=$jogo")
            ->fetch();

        $classificacao = new ClassificacaoModel();
        $classificacao->atualizar($jogoInfo['mandante_id'], $gm, $gv);
        $classificacao->atualizar($jogoInfo['visitante_id'], $gv, $gm);
    }
}

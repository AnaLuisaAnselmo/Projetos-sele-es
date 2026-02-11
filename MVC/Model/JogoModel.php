<?php
require_once "Config/Database.php";

class JogoModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM jogos")
            ->fetchAll();
    }

    public function inserir($mandante, $visitante, $data, $estadio) {
        Database::connect()
            ->prepare("INSERT INTO jogos (mandante_id, visitante_id, data_jogo, estadio) VALUES (?, ?, ?, ?)")
            ->execute([$mandante, $visitante, $data, $estadio]);
    }
}

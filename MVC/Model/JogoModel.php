<?php
require_once "Config/Database.php";

class JogoModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM jogos")
            ->fetchAll();
    }

    public function inserir($mandante, $visitante, $gols_mandante, $gols_visitante,$estadio, $data,  $grupo ) {
        Database::connect()
            ->prepare("INSERT INTO jogos ( mandante, visitante, gols_mandante, gols_visitante, estadio, data_jogo,  grupo  ) VALUES (?, ?, ?, ?, ?, ?, ?)")
            ->execute([ $mandante, $visitante, $gols_mandante,   $gols_visitante, $estadio, $data,  $grupo]);
    }
}

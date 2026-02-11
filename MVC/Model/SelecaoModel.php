<?php
require_once "Config/Database.php";

class SelecaoModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM selecoes")
            ->fetchAll();
    }

    public function inserir($nome, $continente, $grupo) {
        Database::connect()
            ->prepare("INSERT INTO selecoes (nome, continente, grupo_id) VALUES (?, ?, ?)")
            ->execute([$nome, $continente, $grupo]);

        $id = Database::connect()->lastInsertId();

        Database::connect()
            ->prepare("INSERT INTO classificacao (selecao_id, grupo_id) VALUES (?, ?)")
            ->execute([$id, $grupo]);
    }
}

<?php
require_once "Config/Database.php";

class GrupoModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM grupos")
            ->fetchAll();
    }

    public function inserir($nome) {
        Database::connect()
            ->prepare("INSERT INTO grupos (nome) VALUES (?)")
            ->execute([$nome]);
    }
}

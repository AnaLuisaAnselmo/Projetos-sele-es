<?php
require_once "Config/Database.php";

class UsuarioModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM usuarios")
            ->fetchAll();
    }

    public function inserir($nome, $idade, $cargo, $selecao) {
        Database::connect()
            ->prepare("INSERT INTO usuarios (nome, idade, cargo, selecao_id) VALUES (?, ?, ?, ?)")
            ->execute([$nome, $idade, $cargo, $selecao]);
    }
}

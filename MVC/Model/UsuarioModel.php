<?php
require_once "Config/Database.php";

class UsuarioModel {

    public function listarusuarios() {
        return Database::connect()
            ->query("SELECT * FROM usuarios")
            ->fetchAll();
    }

    public function inserir($nome, $idade, $cargo, $selecao_id) {
        Database::connect()
            ->prepare("INSERT INTO usuarios (nome, idade, cargo, selecao_id) VALUES (?, ?, ?, ?)")
            ->execute([$nome, $idade, $cargo, $selecao_id]);
    }

public function deletar($id)
{
    Database::connect()
        ->prepare("DELETE FROM usuarios WHERE id=?")
        ->execute([$id]);
}
}

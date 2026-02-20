<?php
require_once "Config/Database.php";

class SelecaoModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM selecoes")
            ->fetchAll();
    }

   public function inserir($nome, $continente, $grupo) {

    $conn = Database::connect();

    $stmt = $conn->prepare(
        "INSERT INTO selecoes (nome, continente, grupo_id) VALUES (?, ?, ?)"
    );
    $stmt->execute([$nome, $continente, $grupo]);

    $id = $conn->lastInsertId(); 

    $stmt2 = $conn->prepare(
        "INSERT INTO classificacao (selecao_id, grupo_id) VALUES (?, ?)"
    );
    $stmt2->execute([$id, $grupo]);
}

public function deletar($id)
{
    Database::connect()
        ->prepare("DELETE FROM selecao WHERE id=?")
        ->execute([$id]);
}

}

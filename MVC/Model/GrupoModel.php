<?php
require_once "Config/Database.php";
class GrupoModel {
    private $pdo;

    public function listar()
    {
        return Database::connect()
        ->query("SELECT * FROM grupos")
        ->fetchAll();
    }

    public function listargrupo($id)
     {
        $conn = Database::connect();

        $stmt = $conn->prepare("SELECT * FROM grupos WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function editar($id, $nome)
    {
        $conn = Database::connect();

        $stmt = $conn->prepare("UPDATE grupos
        SET nome=?
        WHERE id = ?");

        $stmt->execute([ $nome, $id]);
    }

    public function inserir($nome)
     {
      Database::connect()
      ->prepare("INSER INTO grupos (nome) VALUES (?)")
      ->execute([$nome]);
    }

    public function grupodeletar($id) {
        $sql = "DELETE FROM grupos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

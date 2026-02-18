<?php
class GrupoModel {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=copa", "root", "");
    }

    public function listar() {
        $sql = "SELECT * FROM grupo";
        return $this->pdo->query($sql);
    }

    public function inserir($nome) {
        $sql = "INSERT INTO grupo (nome) VALUES (:nome)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
    }

    public function excluir($id) {
        $sql = "DELETE FROM grupo WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM grupo WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome) {
        $sql = "UPDATE grupo SET nome = :nome WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

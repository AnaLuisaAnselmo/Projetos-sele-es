<?php
class GrupoModel {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=copa", "root", "");
    }

    public function listargrupo() {
        $sql = "SELECT * FROM grupos";
        return $this->pdo->query($sql);
    }

    public function inserir($nome) {
        $sql = "INSERT INTO grupos (nome) VALUES (:nome)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
    }

    public function grupodeletar($id) {
        $sql = "DELETE FROM grupos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM grupos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome) {
        $sql = "UPDATE grupos SET nome = :nome WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}

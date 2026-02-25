<?php
require_once "Config/Database.php";

class UsuarioModel {

    private $pdo;

    public function listar() 
    {
        return Database::connect()
            ->query("SELECT * FROM usuarios")
            ->fetchAll();
    }

   public function listarusuario($id)
{
    $conn = Database::connect();

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);

    return $stmt->fetch();
}
    public function editar( $nome, $idade, $cargo, $selecao_id)
    {

       $conn = Database::connect();

        $stmt = $conn->prepare("UPDATE usuarios
            SET nome = ?, 
                idade = ?, 
                cargo = ?,
                selecao_id = ?
            WHERE id = ?");

        $stmt->execute([$nome, $idade, $cargo, $selecao_id, $_GET["id"]]);
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

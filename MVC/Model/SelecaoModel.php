<?php
require_once "Config/Database.php";

class SelecaoModel {

   private $pdo;

    public function listar() 
    {
        return Database::connect()
            ->query("SELECT * FROM selecoes")
            ->fetchAll();
    }

    public function listarselecao($id)
    {
        $conn = Database::connect();

        $stmt = $conn->prepare("SELECT * FROM selecoes WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function editar($id, $nome, $continente, $grupo_id)
    {
        
        $conn = Database::connect();

        $stmt = $conn->prepare("UPDATE selecoes
        SET nome = ?,
           continente = ?,
           grupo_id = ?
        WHERE id = ? ");

        $stmt->execute([$nome, $continente,$grupo_id, $id]);
    }

   public function inserir($nome, $continente, $grupo_id) 
   {
    Database::connect()
     ->prepare("INSERT INTO selecoes (nome, continente, grupo_id) VALUES (?, ?, ?)")
     ->execute([$nome, $continente, $grupo_id]);

}

public function deletar($id)
{
    Database::connect()
        ->prepare("DELETE FROM selecao WHERE id=?")
        ->execute([$id]);
}

}

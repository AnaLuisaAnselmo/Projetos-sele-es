<?php
require_once "Config/Database.php";

class UsuarioModel {

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM usuarios")
            ->fetchAll();
    }

    public function listarusuario()
    {
        $id = $_GET['id'];
        return Database::connect()
            ->query("select * from usuarios where id = $id")
            ->fetch();
    }

    public function editar($nome, $idade, $cargo, $selecao_id)
    {

       $conn = Database::connect();

        $stmt = $conn->prepare("UPDATE usuarios
            SET nome = ?, 
                idade = ?, 
                cargo = ?,
                selecao_id = ?,
            WHERE id = ?");

        $stmt->execute([$nome, $idade, $cargo, $selecao_id,$_GET["id"]]);
    }

    public function inserir($nome, $idade, $cargo, $selecao_id) {
        Database::connect()
            ->prepare("INSERT INTO usuarios (nome, idade, cargo, selecao_id) VALUES (?, ?, ?, ?)")
            ->execute([$nome, $idade, $cargo, $selecao_id]);
    }

    public function deletar($id)
{
    Database::connect()
        ->prepare("DELETE FROM usuario WHERE id=?")
        ->execute([$id]);
}
}

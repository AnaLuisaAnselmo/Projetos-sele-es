<?php
require_once "Config/Database.php";

class JogoModel
{


    public function editar($id, $mandante, $visitante, $gols_mandante, $gols_visitante, $estadio, $data_jogo, $grupo)
    {
        $conn = Database::connect();



        $stmt = $conn->prepare("UPDATE jogos 

            SET id = ?,
                mandante = ?,
                visitante = ?, 
                gols_mandante = ?, 
                gols_visitante = ?,
                estadio = ?,
                data_jogo = ?, 
                grupo = ?
            WHERE id = ?");

        $stmt->execute([$id, $mandante, $visitante, $gols_mandante, $gols_visitante, $estadio, $data_jogo, $grupo]);
    }

    public function listar()
    {
        return Database::connect()
            ->query("select*from jogos ")
            ->fetchAll();

    }

    public function listarjogo()
    {
        $id = $_GET['id'];
        return Database::connect()
            ->query("select * from jogos where id = $id")
            ->fetch();
    }

    public function deletar($id)
    {
        Database::connect()
            ->prepare("DELETE FROM jogos WHERE id=?")
            ->execute([$id]);
    }
}

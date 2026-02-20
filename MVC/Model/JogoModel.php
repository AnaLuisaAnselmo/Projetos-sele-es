<?php
require_once "Config/Database.php";

class JogoModel {

public function editar($id,$mandante,$visitante,$gm,$gv,$estadio,$data,$grupo)
{
    Database::connect()
        ->prepare("UPDATE jogos 
        SET mandante=?, visitante=?, gols_mandante=?, gols_visitante=?, estadio=?, data_jogo=?, grupo=?
        WHERE id=?")
        ->execute([$mandante,$visitante,$gm,$gv,$estadio,$data,$grupo,$id]);
}

public function deletar($id)
{
    Database::connect()
        ->prepare("DELETE FROM jogos WHERE id=?")
        ->execute([$id]);
}
}

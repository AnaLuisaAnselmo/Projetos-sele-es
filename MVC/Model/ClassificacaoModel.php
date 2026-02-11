<?php
require_once "Config/Database.php";

class ClassificacaoModel {

    public function atualizar($selecao, $golsFeitos, $golsSofridos) {

        $db = Database::connect();
        $saldo = $golsFeitos - $golsSofridos;

        if ($golsFeitos > $golsSofridos) {
            $db->query("UPDATE classificacao SET pontos=pontos+3, vitorias=vitorias+1 WHERE selecao_id=$selecao");
        } elseif ($golsFeitos == $golsSofridos) {
            $db->query("UPDATE classificacao SET pontos=pontos+1, empates=empates+1 WHERE selecao_id=$selecao");
        } else {
            $db->query("UPDATE classificacao SET derrotas=derrotas+1 WHERE selecao_id=$selecao");
        }

        $db->query("UPDATE classificacao SET 
            gols_marcados=gols_marcados+$golsFeitos,
            gols_sofridos=gols_sofridos+$golsSofridos,
            saldo_gols=saldo_gols+$saldo
            WHERE selecao_id=$selecao");
    }

    public function listar() {
        return Database::connect()
            ->query("SELECT * FROM classificacao ORDER BY grupo_id, pontos DESC, saldo_gols DESC, gols_marcados DESC")
            ->fetchAll();
    }
}

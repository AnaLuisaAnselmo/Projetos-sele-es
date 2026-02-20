<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/ResultadoController.php";    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    
<form id="formresultado" method="POST" action="index.php?pagina=resultado&acao=editar&id=<?=$dados['id'];?>">

    <input type="number" name="jogo_id" placeholder="ID do Jogo" value="<?= $dados['jogo_id']; ?>" required>

    <input type="number" name="gols_mandante" placeholder="Gols Mandante" value="<?= $dados['gols_mandante']; ?>" required>

    <input type="number" name="gols_visitante" placeholder="Gols Visitante" value="<?= $dados['gols_visitante']; ?>" required>

    <button type="submit">Registrar</button>
</form>

</body>
</html>
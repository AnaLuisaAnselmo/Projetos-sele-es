<?php

require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/Config/Database.php";
require_once "C:/Turma2/xampp/htdocs/Projetos-sele-es/MVC/Controller/JogoController.php";    

$jogoController = new JogoController();
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
</head>
<body>
<form method="POST" action="index.php?pagina=jogo&acao=editar">

    <input type="hidden" name="id" value="<?= $dados['id']; ?>">

    <input type="number" name="mandante" value="<?= $dados['mandante']; ?>" required>

    <input type="number" name="visitante" value="<?= $dados['visitante']; ?>" required>

    <input type="number" name="gols_mandante" value="<?= $dados['gols_mandante']; ?>" required>

    <input type="number" name="gols_visitante" value="<?= $dados['gols_visitante']; ?>" required>

    <input type="text" name="estadio" value="<?= $dados['estadio']; ?>" required>

    <input type="datetime-local" name="data_jogo" value="<?= $dados['data_jogo']; ?>" required>

    <input type="text" name="grupo" value="<?= $dados['grupo']; ?>" required>

    <button type="submit">Salvar Alterações</button>
</form>

</body>
</html>
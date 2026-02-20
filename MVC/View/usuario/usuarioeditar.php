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
    
<form id="formresultado" method="POST" action="index.php?pagina=usuario&acao=editar&id=<?=$dados['id'];?>">

      <input type="text" name="nome" placeholder="Nome"  value="<?= $dados['nome']; ?>" required>

    <input type="number" name="idade" placeholder="Idade"  value="<?= $dados['idade']; ?>" required>

    <input type="text" name="cargo" placeholder="Cargo"  value="<?= $dados['cargo']; ?>" required>

    <input type="number" name="selecao_id" placeholder="ID da Seleção"  value="<?= $dados['selecao_id']; ?>" required>
    
    <button type="submit">Registrar</button>
</form>

</body>
</html>